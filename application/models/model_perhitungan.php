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

	public function prosesPerhitungan($did){
		$data_wp = array();
		$bobot_kriteria = array();
		$data_nilai_alternatif = array();
		$cdn = array();
		$bobot = $this->db->select('*')->from('tb_bobot')->get()->result();
		foreach($bobot as $row1){
			$bobot_kriteria[$row1->id_kriteria]=$row1->bobot_akhir;
		}

		$data = $this->db->select('*')->from('tb_nilaialternatif')->join('tb_alternatif','tb_alternatif.id_alternatif=tb_nilaialternatif.id_alternatif')->join('tb_kriteria','tb_kriteria.id_kriteria=tb_nilaialternatif.id_kriteria')->get()->result();

		
			for($x=0;$x<count($data);$x++){
				foreach($data as $row2){
					$data_wp[$x]['id_alternatif']=$did['id_alternatif'][$x];
				}
				$data_nilai = $this->db->select('*')->from('data_nilai_alternatif')->get()->result_array();
				$data_alternatif = $this->db->select('*')->from('tb_alternatif')->get()->result();
				$data_bobot = $this->db->select('*')->from('tb_bobot')->get()->result();
				$data_nilaialternatif = $this->db->select('*')->from('tb_nilaialternatif')->get()->result();
				
				foreach($data_bobot as $row3){
					for ($db=0; $db < count($data_bobot); $db++){
						$cdn = array('bobot_akhir' => $row3->bobot_akhir);
					}
					
				}

				for($dn=0;$dn<count($data_nilai);$dn++){
					$data_nilai_alternatif = array('nilai' => $data_nilai[$dn]['nilai']);
					//$data_nilai_alternatif['nilai']=$row3['nilai']['$dn'];
				}
				$data_wp[$x]['vektor_s']=pow($data_nilai_alternatif[$x], $bobot_kriteria[$cdn]);
				//$data_vektor_s = array('vektor_s' => $data_wp[$x]['vektor_s']);
				$hitung = $this->db->set($data_wp[$x]['vektor_s'])->where('id_alternatif', $data_wp[$x]['id_alternatif'])->update('tb_hitung');
			}

		
	}
}
?>