<?php
class model_user extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getJumlahUser(){
        return $this->db->query("SELECT COUNT(id_user) AS totaluser FROM tb_user");
    }

    
}
?>