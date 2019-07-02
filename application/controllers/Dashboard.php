<?php
class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();

		//$this->load->model('modell');
		//$this->load->database();
	}

	public function index(){
		$data=array(
			'content'=>'vDashboard'
		);
		$this->load->view('template/template',$data);
	}
}
?>