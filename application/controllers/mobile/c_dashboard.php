<?php
class c_dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();

        $this->load->database();
		$this->load->model('model_alternatif');
		$this->load->model('model_kriteria');
		$this->load->model('model_alternatif');
		$this->load->model('model_pembobotan');
		$this->load->model('model_perhitungan');
		$this->load->model('model_user');
	}

	public function index(){
		
		$this->load->view('mobile/templatemobile');
	}
}

?>