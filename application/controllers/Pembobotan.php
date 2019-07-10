<?php
class Pembobotan extends CI_Controller{

	public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('Login');
        };
        $this->load->database();
        $this->load->model('modell');
        $this->load->model('model_pembobotan');
    }
	public function index(){
		$data=array(
			'data_bobot'=>$this->model_pembobotan->getDataBobot()->result(),
			'content'=>'vPembobotan'
		);

		//$data['jmlbobot'] = $this->modell->sumAllBobot();
		//$data['data_bobot'] = $this->modell->getbobot();

		//$hasilBobotAkhir = ($data_bobot->nilai_kriteria / $jmlbobot->hasilba);
		

		$this->load->view('template/template',$data);
	}

	public function editBobot(){
    $id_kriteria = $this->uri->segment(3);
    $data_skala_kriteria = $this->model_pembobotan->getSkalaKriteriaById($id_kriteria)->result();
    $dataskalakriteria = $this->model_pembobotan->getDataSkalaKriteria($id_kriteria)->row();
		$data=array(
			'content'=>'vEditBobot',
      'data_skala_kriteria_by_id' => $data_skala_kriteria,
      'data_skala_kriteria'=>$dataskalakriteria
		);

		$this->load->view('template/template',$data);

	}

	public function saveEditBobot(){
    $id_kriteria = $this->input->post('id_kriteria');
    $bobot_awal = $this->input->post('bobot_awal');
    $id_skalakriteria = $this->input->post('skala_kriteria');
		if($_POST){
      $data = array('id_skalakriteria' => $id_skalakriteria,'bobot_awal' => $bobot_awal);
      $return = $this->model_pembobotan->edit($data, $id_kriteria);
      echo $return;
      redirect(base_url('Pembobotan'));
    }else{
      redirect(base_url('Kriteria'));
    }
	}

	public function getDataNiliForSkala(){
    $skala_kriteria=$this->input->post('skala_kriteria');

  	$data_skala_kriteria=$this->model_pembobotan->getNilaiSkalaForBobotById($skala_kriteria)->row();

    //echo '<input type="text" name="nohp" class="form-control" id="nohp" value="'.$data_noplat_user->no_hp.'" required="" readonly="">';
    echo $data_skala_kriteria->nilai_skalakriteria;
  }

}
?>
