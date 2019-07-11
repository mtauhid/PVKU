<?php
class c_pembobotan extends CI_Controller{

	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('model_pembobotan');
    }
	public function index(){
		$data_pembobotan = $this->model_pembobotan->get_data_pembobotan()->result();
		$data=array(
			'data_pembobotan'=> $data_pembobotan,
		);
		$this->load->view('mobile/v_mpembobotan',$data);
	}
}
?>