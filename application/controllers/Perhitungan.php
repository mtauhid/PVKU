<?php
class Perhitungan extends CI_Controller{

	public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('Login');
        };
        $this->load->database();
        $this->load->model('model_perhitungan');
        $this->load->model('model_alternatif');
        $this->load->model('model_kriteria');
    }
	public function index(){
		$data_hasil_perhitungan = $this->model_perhitungan->get_data_hasil_perhitungan()->result();
		$data=array(
			'data_hasil_perhitungan' => $data_hasil_perhitungan,
			'data_perhitungan'=>$this->model_perhitungan->getPerhitungan()->result(),
			'content'=>'vPerhitungan'
		);

		$this->load->view('template/template',$data);
	}

	public function prosesPerhitungan(){
		$id_alternatif = $this->input->post('id_alternatif');
		$did = array(
			'id_alternatif' => $id_alternatif,
		);
		$return = $this->model_perhitungan->prosesPerhitungan();
      	echo json_encode($return, true);
      	redirect(base_url('Perhitungan'));
	}

	public function detail_perhitungan(){
		$alternatif = $this->model_alternatif->getAlternatif();
		$kriteria = $this->model_kriteria->getKriteria();
		$vektor_s_v = $this->model_perhitungan->getDetailPerhitungan();
		$nilai_alternatif = $this->model_alternatif->get_nilai_alternatif()->result();

		$data = array(
			'data_alternatif' => $alternatif,
			'data_kriteria' => $kriteria,
			'data_vektor' => $vektor_s_v,
			'nilai_alternatif' => $nilai_alternatif
		);

		$this->load->view('template/detail_perhitungan',$data);

	}
}
?>