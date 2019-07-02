<?php
class Kriteria extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_kriteria');
    }
	public function index(){
		$data=array(
			'data_kriteria'=>$this->model_kriteria->getKriteria(),
			'content'=>'vKriteria'
		);
		$this->load->view('template/template',$data);
	}

	public function tambahKriteria(){
		$data=array(
			'content'=>'vTambahKriteria'
		);
		$this->load->view('template/template',$data);
	}

	public function saveTambahKriteria(){
		$input['nama_kriteria'] = $this->input->post('nama_kriteria');
        $input['jenis_kriteria'] = $this->input->post('jenis_kriteria');

        $this->db->insert('tb_kriteria', $input);
        redirect('Kriteria');
	}

	public function editKriteria(){
		$id_kriteria = $this->uri->segment(3);
		$list = $this ->model_kriteria ->getKriteriaByid($id_kriteria)->row();
		$data=array(
			'data_kriteria'=>$list,
			'content'=>'vEditKriteria'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesEditKriteria(){
		$id_kriteria = $this->input->post('id_kriteria');
		$nama_kriteria = $this->input->post('nama_kriteria');
		$jenis_kriteria = $this->input->post('jenis_kriteria');

		$data = array(
			'nama_kriteria' => $nama_kriteria,
			'jenis_kriteria' => $jenis_kriteria
		);

		$this->model_kriteria->editDataKriteria($id_kriteria, $data);
		redirect(site_url('Kriteria'));
	}

	function deleteKriteria(){
		$id['id_kriteria'] = $this->uri->segment(3);
        $this->model_kriteria->deleteData('tb_kriteria',$id);
        redirect("Kriteria");

	}

	public function skalaKriteria(){
		$id_kriteria = $this->uri->segment(3);
		$kriteria = $this->model_kriteria->getSkalaKriteria($id_kriteria)->row();
		$list = $this->model_kriteria->getSkalaKriteria($id_kriteria)->result();
		$data=array(
			'kriteria' => $kriteria,
			'data_skala_kriteria'=>$list,
			'content'=>'vSkalaKriteria'
		);
		$this->load->view('template/template',$data);
	}

	public function tambahSkalaKriteria(){
		$id_kriteria = $this->uri->segment(3);
		$data=array(
			'data_kriteria'=>$this->model_kriteria->getSkalaKriteria($id_kriteria)->row(),
			'content'=>'vTambahSkalaKriteria'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesTambahSkalaKriteria(){
		$id_kriteria = $this->input->post('id_kriteria');
		$skala_kriteria = $this->input->post('skala_kriteria');
		$nilai_skala_kriteria = $this->input->post('nilai_skala');

		$data = array(
			'id_kriteria' => $id_kriteria,
			'skala_kriteria' => $skala_kriteria,
			'nilai_skalakriteria' => $nilai_skala_kriteria
		);

		$this->model_kriteria->tambahSkalaKriteria($id_kriteria, $data);
		redirect(site_url('Kriteria/skalaKriteria/'.$id_kriteria));
	}

	public function editSkalaKiteria(){
		$id_skalakriteria = $this->uri->segment(3);
		$list = $this->model_kriteria->getSkalaKriteria2($id_skalakriteria)->row();
		$data=array(
			'data_skala_kriteria'=>$list,
			'content'=>'vEditSkalaKriteria'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesEditSkalaKriteria(){
		$id_skalakriteria = $this->input->post('id_skalakriteria');
		$id_kriteria = $this->input->post('id_kriteria');
		$skala_kriteria = $this->input->post('skala_kriteria');
		$nilai_skalakriteria = $this->input->post('nilai_skala');

		$data = array(
			'id_kriteria' => $id_kriteria,
			'skala_kriteria' => $skala_kriteria,
			'nilai_skalakriteria' => $nilai_skalakriteria
		);

		$this->model_kriteria->prosesEditSkalaKriteria($id_skalakriteria, $data);
		redirect(site_url('Kriteria/skalaKriteria/'.$id_kriteria));
	}

	public function deleteSkalaKriteria(){
		$list = $this->model_kriteria->getSkalaKriteria2($id_skalakriteria)->row();
		$id['id_skalakriteria'] = $list;
		$id_kriteria = $this->uri->segment(3);
        $this->model_kriteria->deleteData('tb_skalakriteria',$id);
        redirect("Kriteria/skalaKriteria/".$id_kriteria);
	}

}
?>