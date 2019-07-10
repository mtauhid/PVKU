<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_perhitungan extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function getPerhitungan(){
		$this->db->select('*');
	    $this->db->from('tb_hitung');
	    $this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif=tb_hitung.id_alternatif');

		$query = $this ->db ->get();

		return $query;
	}

	public function getRangking(){
		$this->db->select('*');
	    $this->db->from('tb_hitung');
	    $this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif=tb_hitung.id_alternatif');
	    $this->db->limit(5);
		$query = $this ->db ->get();

		return $query;
	}

	public function prosesPerhitungan(){
		$data_json = array();
        $data_kriteria = array();
        $data_bobot_kriteria = array();

        //Ambil Data Alternatif
        $tb_alternatif = $this->db->get('tb_alternatif');

        //Ambil Data Bobot
        $tb_bobot = $this->db->get('tb_bobot');
        foreach($tb_bobot->result() as $bobot_kriteria){
            $data_bobot_kriteria[$bobot_kriteria->id_bobot]=$bobot_kriteria->bobot_akhir;
        }

        $tb_kriteria = $this->db->get('tb_kriteria');
        foreach($tb_kriteria->result() as $kriteria){
            $data_kriteria[]=$kriteria->id_kriteria;
        }
		
		$x=0;
        foreach($tb_alternatif->result() as $row_alternatif){
            $data_json[$x]['id_alternatif']=$row_alternatif->id_alternatif;
            $data_json[$x]['nama_alternatif']=$row_alternatif->nama_alternatif;
            foreach($tb_kriteria->result() as $row_kriteria){
                $this->db->select('*');
                $this->db->from('data_nilai_alternatif');
                $data_nilai_weighted = $this->db->get();
                
                $y=0;
                $vektor_kriteria = 0;
                foreach($data_nilai_weighted->result() as $row_data_nilai_weighted){
                    $vektor_kriteria = $vektor_kriteria + pow($row_data_nilai_weighted->nilai,$data_bobot_kriteria[$row_data_nilai_weighted->id_kriteria]);
                    $this->db->set($vektor_kriteria)->where('id_alternatif', $data_json[$x]['id_alternatif'])->update('tb_hitung');
                }
                $data_json[$x]['vektor_s']=$vektor_kriteria;
                
            }
            $x++;
        }

        $total_bobot = array();
        for($x=0;$x<count($data_kriteria);$x++){
            $total_bobot[$data_kriteria[$x]] = array_sum(array_column($data_json,'vektor_s'));
        }
        for($x=0;$x<count($data_json);$x++){
            for($y=0;$y<count($data_kriteria);$y++){
                $vektor_v = $data_json[$x]['vektor_s'] / $total_bobot[$data_id_kriteria[$y]];
                $this->db->set($vektor_v)->where('id_alternatif', $data_json[$x]['id_alternatif'])->update('tb_hitung');
                $data_json[$x]['vektor_v'] = $vektor_v;
            }
        }
	}
}
?>