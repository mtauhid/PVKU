<?php
class c_perhitungan extends CI_Controller{

	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('model_perhitungan');
    }
	public function index(){

		$data_perhitungan = $this->model_perhitungan->get_data_hasil_perhitungan_mobile()->result();
		$data=array(
			'data_perhitungan'=> $data_perhitungan,
		);
		$this->load->view('mobile/v_mperhitungan',$data);
	}


}
?>