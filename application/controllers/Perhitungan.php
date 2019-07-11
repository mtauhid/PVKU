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
}
?>