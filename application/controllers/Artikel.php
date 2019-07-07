<?php
class Artikel extends CI_Controller{
	public function __construct() {
        parent::__construct();
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
		$data = array(
			'judul' => $judul,
			'konten' => $konten
		);

		$this->model_artikel->tambahArtikel($data);
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
} 
?>