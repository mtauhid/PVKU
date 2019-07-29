<?php
class model_login extends CI_Model{
	 public $table = 'tb_user';
	function login($username,$password){	

		// $this->db->where('username', $username);
  //     	$query = $this->db->get($this->table)->row();

      	$this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

      $query = $this->db->get();
        if ($query->num_rows($this->table) == 0) {
            return FALSE;
        } else {
            return $query->row();
        }
	}
}
?>