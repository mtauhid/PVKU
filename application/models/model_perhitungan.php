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

    public function get_data_hasil_perhitungan(){
        $this->db->select('*');
        $this->db->from('v_vektor_v');
        $this->db->join('tb_alternatif','tb_alternatif.id_alternatif=v_vektor_v.id_alternatif');
        $this->db->order_by('v_vektor_v.vektor_v','DESC');
        $query = $this ->db ->get();

        return $query;
    }

    public function get_data_hasil_perhitungan_mobile(){
        $this->db->select('*');
        $this->db->from('v_vektor_v');
        $this->db->join('tb_alternatif','tb_alternatif.id_alternatif=v_vektor_v.id_alternatif');
        $this->db->order_by('v_vektor_v.vektor_v','DESC');
        $this->db->limit('10');
        $query = $this ->db ->get();

        return $query;
    }

    /*
	public function prosesPerhitungan(){
        $data_kriteria = array();
        $bobot_global = array();
        $data_wp = array();

        //Ambil Data Alternatif
        $tb_alternatif = $this->db->get('tb_alternatif')->result_array();
        for($x=0;$x<count($tb_alternatif);$x++){
            $data_wp[$x]['id_alternatif'] = $tb_alternatif[$x]['id_alternatif'];
        }

        $tb_bobot = $this->db->get('tb_bobot')->result_array();
        for($x=0;$x<count($tb_bobot);$x++){
            $bobot_kriteria[$tb_bobot[$x]['id_kriteria']]=$tb_bobot[$x]['bobot_akhir'];
        }

		//Mengambil Nilai Siswa
        for($x=0;$x<count($tb_alternatif);$x++){
            //Mengambil Nilai PerSiswa
            $this->db->select('*');
            $this->db->from('tb_nilaialternatif');
            $this->db->join('tb_kriteria','tb_kriteria.id_kriteria=tb_nilaialternatif.id_kriteria');
            $this->db->where('tb_nilaialternatif.id_alternatif',$tb_alternatif[$x]['id_alternatif']);
            $nilai_alternatif = $this->db->get()->result();
            //Nilai Vektor S Awal adalah 0
            $nilai_vektor = 0;
            //Perulangan Untuk Setiap Nilai Siswa
            foreach($nilai_alternatif as $nilai_alt){
                //Menghitung nilai Vektor dengan mengkuadratkan nilai subkriteria dengan bobot global key index subkriteria
                if($nilai_alt->jenis_kriteria == "Benefit"){
                    $nilai_vektor = $nilai_vektor + pow($nilai_alt->nilai,$bobot_kriteria[$nilai_alt->id_kriteria]);
                }else if($nilai_alt->jenis_kriteria == "Cost"){
                    $nilai_vektor = $nilai_vektor + pow($nilai_alt->nilai,-$bobot_kriteria[$nilai_alt->id_kriteria]);
                }
                
            }
            //Mengambah Nilai Vektor S
            $data_wp[$x]['vektor_s'] = $nilai_vektor;
            $this->db->set('vektor_s',$data_wp[$x]['vektor_s'])->where('id_alternatif', $tb_alternatif[$x]['id_alternatif'])->update('tb_hitung');
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
        */
    
}
?>