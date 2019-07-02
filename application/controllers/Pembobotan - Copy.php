<?php
class Pembobotan extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('modell');
    }
	public function index(){
		$data=array(
			'data_bobot'=>$this->modell->getbobot(),
			'content'=>'vPembobotan',
			'jmlbobot' => $this->modell->sumAllBobot(),
		);

		//$data['jmlbobot'] = $this->modell->sumAllBobot();
		//$data['data_bobot'] = $this->modell->getbobot();

		//$hasilBobotAkhir = ($data_bobot->nilai_kriteria / $jmlbobot->hasilba);
		

		$this->load->view('template/template',$data);
	}

	public function tambahbobot(){
		$data=array(
			'data_alternatif'=>$this->modell->getAlternatif(),
			'content'=>'vTambahbobot'
		);
		$this->load->view('template/template',$data);
	}

	public function saveTambahbobot(){
		$input['nama_bobot'] = $this->input->post('nama_bobot');
        $input['jenis_bobot'] = $this->input->post('jenis_bobot');

        $this->db->insert('tb_bobot', $input);
        redirect('bobot');
	}

	public function editBobot(){
		$data_kriteria = $this ->modell ->getKriteria();
		$data=array(
			'data_kriteria'=>$data_kriteria,
			'content'=>'vEditBobot'
		);
		$this->load->view('template/template',$data);
	}

	public function Refresh(){
		$qsum=$this->modell->get_data_skala_sum();
		$sumB=$this->modell->sum_bobot();
		$data=array(
			'query_sum'=>$qsum,
			'sum_bobot'=>$sumB
		);
		$totnskl = $sum_bobot['sumsk'];
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

	public function saveEditBobot(){
			$input['id_skalakriteria'] = $this->input->post('skala_kriteria');

			$nama_kriteria = $this->input->post('nama_kriteria');

			if(!empty($nama_kriteria)){
				$this->db->where('id_kriteria',$nama_kriteria);
				$this->db->update('tb_bobot',$input);
			}
      redirect(site_url('Pembobotan/editBobot'));
	}

	public function hitungBobot(){
		$data_bobot = $this->modell->getAllBobot();
		$jmlbobot = $this->modell->sumAllBobot();

		$hasilBobotAkhir = $data_bobot->nilai_kriteria/$jmlbobot->hasilba;
		//$hitungBobotAkhir =
	}

	function deletebobot(){
		$id['id_bobot'] = $this->uri->segment(3);
        $this->modell->deleteData('tb_bobot',$id);
        redirect("bobot");

	}

}
?>
