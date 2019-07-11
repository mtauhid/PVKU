<?php
class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect(base_url('Login'));
        };
        $this->load->database();
		$this->load->model('model_alternatif');
		$this->load->model('model_kriteria');
		$this->load->model('model_alternatif');
		$this->load->model('model_pembobotan');
		$this->load->model('model_perhitungan');
		$this->load->model('model_user');
	}

	public function index(){
		$data_jumlah_alternatif = $this->model_alternatif->getJumlahAlternatif()->row();
		$data_jumlah_kriteria = $this->model_kriteria->getJumlahKriteria()->row();
		$data_jumlah_user= $this->model_user->getJumlahUser()->row();
		$data_bobot = $this->model_pembobotan->getDataBobot()->result();
		$data_perhitungan = $this->model_perhitungan->getRangking()->result();
		$data=array(
			'data_jumlah_alternatif' => $data_jumlah_alternatif,
			'data_jumlah_kriteria' => $data_jumlah_kriteria,
			'data_jumlah_user' => $data_jumlah_user,
			'data_bobot' => $data_bobot,
			'data_perhitungan' => $data_perhitungan,
			'content'=>'vDashboard'
		);
		$this->load->view('template/template',$data);
	}
}
?>