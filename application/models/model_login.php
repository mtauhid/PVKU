<?php
class model_login extends CI_Model{
	 public $table = 'tb_user';
	function login($username,$password){	

		$this->db->where('username', $username);
      	$query = $this->db->get($this->table)->row();


      //jika bernilai 3 maka password salah
      $hash = $query->password;
      if (md5($password) != $hash) return 3;

      return $query;
	}
}
?>