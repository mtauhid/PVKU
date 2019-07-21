<?php
class Api extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_alternatif');
        $this->load->model('model_kriteria');
        $this->load->model('model_pembobotan');
        $this->load->model('model_perhitungan');
        $this->load->model('model_artikel');
    }
	
	public function alternatif(){
		$data = $this->model_alternatif->getAlternatif();
		echo json_encode($data);
	}

	public function detail_alternatif(){
		$id_alternatif = $this->uri->segment(4);
		// echo "string".$id_alternatif;
		// die();
		$data = $this->model_alternatif->get_detail_nilai_alternatif($id_alternatif);
		echo json_encode($data);
	}

	public function update_alternatif(){
		$id_alternatif = $this->input->post('id_alternatif');
		$data = array(
			'nama_alternatif' => $this->input->post('nama_alternatif'),
			'status' => $this->input->post('status')
			);
		$this->model_alternatif->edit_data_alternatif($id_alternatif,$data);
	}

	public function kriteria(){
		$data = $this->model_kriteria->getKriteria();
		echo json_encode($data);
	}

	public function pembobotan(){
		$data = $this->model_pembobotan->getDataBobot()->result();
		echo json_encode($data);
	}

	public function pembobotan_id_kriteria(){
		$id_kriteria = $this->uri->segment(4);
		$data = $this->model_pembobotan->getSkalaKriteriaByIdApi($id_kriteria)->result();
		echo json_encode($data);
	}

	public function update_pembobotan(){
		$id_bobot = $this->input->post('id_bobot');
		$data = array(
			'id_skalakriteria' => $this->input->post('id_skalakriteria'),
			'bobot_awal' => $this->input->post('bobot_awal')
			);
		$this->model_pembobotan->update_pembobotan($data,$id_bobot);
	}

	public function perhitungan(){
		$data = $this->model_perhitungan->get_data_hasil_perhitungan()->result();
		echo json_encode($data);
	}

	public function artikel(){
		$data = $this->model_artikel->getArtikel()->result();
		echo json_encode($data);
	}
}
?>