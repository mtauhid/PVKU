<?php
class nilaiAlternatif extends CI_Controller{

	public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('Login');
        };
        $this->load->database();
        $this->load->model('model_alternatif');
    }
	public function index(){
		$data_alternatif = $this->model_alternatif->getAlternatif();
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif2()->result();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data=array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vNilaiAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function search1(){
		$filter = $this->input->post('search1');
		$data_alternatif = $this->model_alternatif->getAlternatif();
		$data_nilaialternatif = $this->model_alternatif->getSearchNilaiAlternatif($filter)->result();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data=array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vNilaiAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function search2(){
		$filter = $this->input->post('search2');
		$data_alternatif = $this->model_alternatif->getAlternatif();
		$data_nilaialternatif = $this->model_alternatif->getSearchNilaiAlternatif($filter)->result();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data=array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vNilaiAlternatif'
		);
		$this->load->view('template/template',$data);
	}
}
?>