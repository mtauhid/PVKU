<?php
class c_alternatif extends CI_Controller{

	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('model_alternatif');
    }
	public function index(){
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif1()->row();
		$data=array(
			'data_alternatif'=>$this->model_alternatif->getAlternatif(),
			'data_nilaialternatif' => $data_nilaialternatif,
			'content'=>'vAlternatif'
		);
		$this->load->view('mobile/v_malternatif',$data);
	}

	public function tambahAlternatif(){
		$data=array(
			'data_alternatif'=>$this->model_alternatif->getAlternatif(),
			'content'=>'vTambahAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function saveTambahAlternatif(){
		$input['nama_alternatif'] = $this->input->post('nama_alternatif');
        $input['status'] = $this->input->post('status_alternatif');

        $this->db->insert('tb_alternatif', $input);
        //$this->model_alternatif->tambah_alternatif_trigger();
        redirect('Alternatif');
	}

	public function edit_alternatif(){
		$id_alternatif = $this->uri->segment(4);
		$alternatif = $this->model_alternatif->get_alternatif_Byid($id_alternatif)->row();
		$data=array(
			'data_alternatif'=>$alternatif
		);
		$this->load->view('mobile/v_meditalternatif',$data);
	}

	public function proses_edit_alternatif(){
		$id_alternatif = $this->input->post('id_alternatif');
		$status = $this->input->post('status');

		$data = array(
			'status' => $status
		);

		$this->model_alternatif->edit_data_alternatif($id_alternatif, $data);
		redirect(base_url('mobile/c_alternatif'));
	}

	function deleteAlternatif(){
		$id['id_alternatif'] = $this->uri->segment(3);
        $this->model_alternatif->deleteData('tb_alternatif',$id);
        redirect("Alternatif");

	}

	public function nilaiAlternatif(){
		$id_alternatif = $this->uri->segment(3);

		$data_alternatif = $this->model_alternatif->getAltenatifById($id_alternatif)->row();
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif($id_alternatif)->result();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data = array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vNilaiAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function tambahNilaiAlternatif(){
		$id_alternatif =$this->uri->segment(3);
		$data_alternatif = $this->model_alternatif->getAltenatifById($id_alternatif)->row();
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif($id_alternatif)->result();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data = array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vTambahNilaiAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesTambahNilaiAlternatif(){
		$id_alternatif = $this->input->post('id_alternatif');
		$id_kriteria = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');
		$data = array(
			'id_alternatif' => $id_alternatif,
			'id_kriteria' => $id_kriteria,
			'nilai' => $nilai
		);
		$this->model_alternatif->prosesTambahNilaiAlternatif($id_alternatif, $data);
		redirect(site_url('Alternatif/nilaiAlternatif/'.$this->input->post('id_alternatif')));
	}

	public function editNilaiAlternatif(){
		$id_nilai =$this->uri->segment(3);
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif3($id_nilai)->row();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data = array(
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vEditNilaiAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesEditNilaiAlternatif(){
		$id_nilai = $this->input->post('id_nilai');
		$id_alternatif = $this->input->post('id_alternatif');
		$id_kriteria = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');
		$data = array(
			'id_alternatif' => $id_alternatif,
			'nilai' => $nilai
		);
		$this->model_alternatif->prosesEditNilaiAlternatif($id_nilai, $data);
		redirect(site_url('Alternatif/nilaiAlternatif/'.$this->input->post('id_alternatif')));
	}

	public function get_data_alternatif(){
		$data_alternatif = $this->model_alternatif->get_alternatif()->result();

		echo json_encode($data_alternatif);
	}

	/*public function f_alternatif(){
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif1()->row();
		$data=array(
			'data_alternatif'=>$this->model_alternatif->getAlternatif(),
			'data_nilaialternatif' => $data_nilaialternatif,
			'content'=>'vAlternatif'
		);
		$this->load->view('template/template',$data);
	}
	*/



}
?>