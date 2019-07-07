<?php
class Perhitungan extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_perhitungan');
    }
	public function index(){
		
		$data=array(
			
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
		$return = $this->model_perhitungan->prosesPerhitungan($did);
      	echo json_encode($return, true);
      	redirect(base_url('Perhitungan'));
	}
}
?>