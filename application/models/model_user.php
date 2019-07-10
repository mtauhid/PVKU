<?php
class model_user extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getJumlahUser(){
        return $this->db->query("SELECT COUNT(id_user) AS totaluser FROM tb_user");
    }

    public function getUser(){
    	return $this->db->query("SELECT * FROM tb_user");
    }

    public function tambahUser($data){
    	$this->db->set($data)->insert('tb_user');
    }

    public function getUserById($id_user){
    	return $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
    }

    public function editUser($data, $id_user){
    	$this->db->set($data)->where('id_user', $id_user)->update('tb_user');
    }
}
?>