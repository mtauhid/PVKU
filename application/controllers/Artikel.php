<?php
class Artikel extends CI_Controller{
	public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('Login');
        };
        $this->load->database();
        $this->load->model('model_artikel');
    }
	public function index(){
		
		$data=array(
			'data_artikel'=>$this->model_artikel->getArtikel()->result(),
			'content'=>'vArtikel'
		);

		$this->load->view('template/template',$data);
	}

	public function tambahArtikel(){
		$data=array(
			'data_artikel'=>$this->model_artikel->getArtikel()->result(),
			'content'=>'vTambahArtikel'
		);

		$this->load->view('template/template',$data);
	}

	public function prosesTambahArtikel(){
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');
		$tgl = $this->input->post('tanggal_waktu');
		$data = array(
			'judul' => $judul,
			'konten' => $konten,
			'tanggal_waktu' => $tgl
		);

		$this->model_artikel->tambahArtikel($data);
		redirect(site_url('Artikel'));
	}

	public function editArtikel(){
		$id_artikel = $this->uri->segment(3);
		$data=array(
			'data_artikel'=>$this->model_artikel->getArtikelById($id_artikel)->row(),
			'content'=>'vEditArtikel'
		);

		$this->load->view('template/template',$data);
	}

	public function prosesEditArtikel(){
		$id_artikel = $this->input->post('id_artikel');
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');
		$tgl = $this->input->post('tanggal_waktu');
		$data = array(
			'judul' => $judul,
			'konten' => $konten,
			'tanggal_waktu' => $tgl
		);

		$this->model_artikel->editArtikel( $id_artikel, $data);
		redirect(site_url('Artikel'));
	}

	public function tampilanwebview(){
		$data=array(
			'data_artikel'=>$this->model_artikel->getArtikel()->result(),
			'content'=>'vTampilanWebView'
		);

		$this->load->view('template/webview',$data);
	}

	public function tampilanreadwebview(){
		$id_artikel = $this->uri->segment(3);
		$data=array(
			'data_artikel'=>$this->model_artikel->getArtikelById($id_artikel)->row(),
			'content'=>'vTampilanReadWebView'
		);

		$this->load->view('template/webview',$data);
	}

	function deleteArtikel(){
		$id_artikel = $this->uri->segment(3);
        $this->model_artikel->deleteData('tb_artikel',$id_artikel);
        redirect("Artikel");

	}
} 
?>