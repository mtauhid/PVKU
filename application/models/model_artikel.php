<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_artikel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function deleteData($id_artikel){
        $this->db->where('id_artikel',$id_artikel)->delete('tb_informasivarietas');
    }

	public function getArtikel(){
		$this->db->select('*');
	    $this->db->from('tb_informasivarietas');

		$query = $this ->db ->get();

		return $query;
	}

	public function getArtikelById($id_artikel){
		$this->db->select('*');
	    $this->db->from('tb_informasivarietas');
	    $this->db->where('id_artikel',$id_artikel);
		$query = $this ->db ->get();

		return $query;
	}

	public function tambahArtikel($data){
		$this->db->set($data)->insert('tb_informasivarietas');
	}

	public function editArtikel($id_artikel, $data){
		$this->db->set($data)->where('id_artikel', $id_artikel)->update('tb_informasivarietas');
	}

}
?>