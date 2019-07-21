<?php
class panduan_mobile extends CI_Controller{
	public function __construct() {
        parent::__construct();
    }
	public function index(){
		$this->load->view('panduan_mobile');
	}
}
?>