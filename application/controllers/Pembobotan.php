<?php
class Pembobotan extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('modell');
        $this->load->model('model_pembobotan');
    }
	public function index(){
		$data=array(
			'data_bobot'=>$this->model_pembobotan->getDataBobot(),
			'content'=>'vPembobotan'
		);

		//$data['jmlbobot'] = $this->modell->sumAllBobot();
		//$data['data_bobot'] = $this->modell->getbobot();

		//$hasilBobotAkhir = ($data_bobot->nilai_kriteria / $jmlbobot->hasilba);
		

		$this->load->view('template/template',$data);
	}

	public function editBobot(){
		$data_kriteria = $this ->modell ->getKriteria();
    $idkriteria = $this->uri->segment(3);
    $dataskalakriteria = $this->model_pembobotan->getDataSkalaKriteria($idkriteria);
		$data=array(
			'data_kriteria'=>$data_kriteria,
			'content'=>'vEditBobot',
      'data_skala_kriteria'=>$dataskalakriteria
		);

		$this->load->view('template/template',$data);

	}

	public function saveEditBobot(){
		if($_POST){
            $data = array(
                'id_skalakriteria'=>$this->input->post('skala_kriteria')
            );
            $return = $this->model_pembobotan->edit($data);
            echo $return;
        }else{
            redirect(base_url('Pembobotan'));
        }
	}

	public function get_data_skala_kriteria(){
		$nama_kriteria=$this->input->post('nama_kriteria');

      $data_skala_kriteria=$this->modell->get_data_skala_kriteria_byid($nama_kriteria);
      $i=0;
      echo '<select name="skala_kriteria" id="skala_kriteria" required=""> ';
      foreach ($data_skala_kriteria as $row ) {
        if($i==0){
					echo '<option value="'.$row->id_skalakriteria.'" selected>'.$row->skala_kriteria.' ('.$row->nilai_kriteria.')</option>';
        }else{
          echo '<option value="'.$row->id_skalakriteria.'">'.$row->skala_kriteria.' ('.$row->nilai_kriteria.')</option>';
        }
        $i++;
      }
      echo '</select>';
	}

	public function get_jenis_kriteria(){
    $nama_kriteria=$this->input->post('nama_kriteria');

  	$data_jenis_kriteria=$this->modell->get_data_jenis_kriteria_byid($nama_kriteria)->row();

    //echo '<input type="text" name="nohp" class="form-control" id="nohp" value="'.$data_noplat_user->no_hp.'" required="" readonly="">';
    echo $data_jenis_kriteria->jenis_kriteria;
  }

	public function get_skala_kriteria(){
    $nama_kriteria=$this->input->post('nama_kriteria');

  	$data_skalakriteria=$this->modell->get_skala_kriteria_byid($nama_kriteria)->row();

    //echo '<input type="text" name="nohp" class="form-control" id="nohp" value="'.$data_noplat_user->no_hp.'" required="" readonly="">';
    echo $data_skalakriteria->skala_kriteria;
  }
}
?>
