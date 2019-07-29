<?php
class Alternatif extends CI_Controller{

	public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('Login');
        };
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
		$this->load->view('template/template',$data);
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
        $input['status'] = "Non Aktif";

        $this->db->insert('tb_alternatif', $input);
        //$this->model_alternatif->tambah_alternatif_trigger();
        redirect('Alternatif');
	}

	public function editAlternatif($id){
		$list = $this->model_alternatif->getAlternatifByid($id)->row();
		$data=array(
			'data_alternatif'=>$list,
			'content'=>'vEditAlternatif'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesEditAlternatif(){
		$id_alternatif = $this->input->post('id_alternatif');
		$nama_alternatif = $this->input->post('nama_alternatif');
		$status = $this->input->post('status');

		$data = array(
			'nama_alternatif' => $nama_alternatif,
			'status' => $status
		);

		$this->model_alternatif->editDataAlternatif($id_alternatif, $data);
		redirect(site_url('Alternatif'));
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
		$data_alternatif_count = $this->model_alternatif->getNilaiAlternatif($id_alternatif)->num_rows();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data = array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_alternatif_count' => $data_alternatif_count,
			'data_kriteria' => $data_kriteria,
			'content'=>'vNilaiAlternatif2'
		);
		// print_r($data);
		// die();
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

	public function tambahNilaiAlternatif2(){
		$id_alternatif =$this->uri->segment(3);
		$data_alternatif = $this->model_alternatif->getAltenatifById($id_alternatif)->row();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data = array(
			'data_alternatif' => $data_alternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vTambahNilaiAlternatif2'
		);
		$this->load->view('template/template',$data);
	}

	public function saveTambahNilaiAlternatif2(){
		$id_alternatif = $this->input->post('id_alternatif');

		$id_kriteria1 = $this->input->post('id_kriteria_1');
		$nilai1 = $this->input->post('nilai_1');

		$id_kriteria2 = $this->input->post('id_kriteria_2');
		$nilai2 = $this->input->post('nilai_2');

		$id_kriteria3 = $this->input->post('id_kriteria_3');
		$nilai3 = $this->input->post('nilai_3');

		$id_kriteria5 = $this->input->post('id_kriteria_5');
		$nilai5 = $this->input->post('nilai_5');

		$data1 = array(
			'id_alternatif' => $id_alternatif,
			'id_kriteria' => $id_kriteria1,
			'nilai' => $nilai1
		);
		$data2 = array(
			'id_alternatif' => $id_alternatif,
			'id_kriteria' => $id_kriteria2,
			'nilai' => $nilai2
		);
		$data3 = array(
			'id_alternatif' => $id_alternatif,
			'id_kriteria' => $id_kriteria3,
			'nilai' => $nilai3
		);
		$data5 = array(
			'id_alternatif' => $id_alternatif,
			'id_kriteria' => $id_kriteria5,
			'nilai' => $nilai5
		);
		$this->model_alternatif->prosesTambahNilaiAlternatif2($id_alternatif, $data1,$data2,$data3,$data5);
		redirect(site_url('Alternatif'));
	}

	public function editNilaiAlternatif2(){
		$id_alternatif =$this->uri->segment(3);
		$data_alternatif = $this->model_alternatif->getAltenatifById($id_alternatif)->row();
		$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif($id_alternatif)->result();
		$data_kriteria = $this->model_alternatif->getKriteria()->result();
		$data = array(
			'data_alternatif' => $data_alternatif,
			'data_nilaialternatif' => $data_nilaialternatif,
			'data_kriteria' => $data_kriteria,
			'content'=>'vEditNilaiAlternatif2'
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

	public function get_data_biodata(){
		$data_biodata = $this->model_alternatif->get_biodata()->result();

		echo json_encode($data_biodata);
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