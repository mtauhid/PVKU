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

	public function edit_pembobotan(){
		$id_kriteria = $this->uri->segment(4);
    	$data_skala_kriteria = $this->model_pembobotan->getSkalaKriteriaById($id_kriteria)->result();
    	$dataskalakriteria = $this->model_pembobotan->getDataSkalaKriteria($id_kriteria)->row();
		$data=array(
      		'data_skala_kriteria_by_id' => $data_skala_kriteria,
      		'data_skala_kriteria'=>$dataskalakriteria
		);

		$this->load->view('mobile/v_meditbobot',$data);
	}

	public function save_edit_bobot(){
		$id_kriteria = $this->input->post('id_kriteria');
	    $bobot_awal = $this->input->post('bobot_awal');
	    $id_skalakriteria = $this->input->post('skala_kriteria');
			if($_POST){
	      $data = array('id_skalakriteria' => $id_skalakriteria,'bobot_awal' => $bobot_awal);
	      $return = $this->model_pembobotan->edit($data, $id_kriteria);
	      echo $return;
	      redirect(base_url('mobile/c_pembobotan'));
	    }else{
	      redirect(base_url('mobile/c_pembobotan'));
	    }
	}

	public function get_data_nilai_for_skala(){
    $skala_kriteria=$this->input->post('skala_kriteria');

  	$data_skala_kriteria=$this->model_pembobotan->getNilaiSkalaForBobotById($skala_kriteria)->row();

    //echo '<input type="text" name="nohp" class="form-control" id="nohp" value="'.$data_noplat_user->no_hp.'" required="" readonly="">';
    echo $data_skala_kriteria->nilai_skalakriteria;
  }
}
?>