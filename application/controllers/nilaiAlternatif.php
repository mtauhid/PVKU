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
		$id_alternatif = $this->uri->segment(3);
		$data_alternatif = $this->model_alternatif->getAlternatif();
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif2()->result();
		$data_nilaialternatif2 = $this->model_alternatif->getNilaiAlternatifById2($id_alternatif)->row();
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