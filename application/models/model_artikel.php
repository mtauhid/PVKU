<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_artikel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function deleteData($table,$data){
        $list = $this->model_kriteria->getSkalaKriteria2($id_skalakriteria)->row();
		$id['id_skalakriteria'] = $list;
		$id_kriteria = $this->uri->segment(3);
        $this->model_kriteria->deleteData('tb_skalakriteria',$id);
        redirect("Kriteria/skalaKriteria/".$id_kriteria);
    }

	public function getArtikel(){
		$this->db->select('*');
	    $this->db->from('tb_artikel');

		$query = $this ->db ->get();

		return $query;
	}

	public function getArtikelById($id_artikel){
		$this->db->select('*');
	    $this->db->from('tb_artikel');
	    $this->db->where('id_artikel',$id_artikel);
		$query = $this ->db ->get();

		return $query;
	}

	public function tambahArtikel($data){
		$this->db->set($data)->insert('tb_artikel');
	}

	public function editArtikel($id_artikel, $data){
		$this->db->set($data)->where('id_artikel', $id_artikel)->update('tb_artikel');
	}

}
?>