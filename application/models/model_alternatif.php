<?php
class model_alternatif extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getAlternatif(){
        return $this->db->query ("SELECT * from tb_alternatif")->result();
    }

    public function getAltenatifById($id_alternatif){
    	return $this->db->query ("SELECT * from tb_alternatif WHERE id_alternatif='$id_alternatif'");
    }

    public function getKriteria(){
        return $this->db->query ("SELECT * from tb_kriteria");
    }

    function insertAlternatif(){
        $this->db->insert('tb_alternatif');
    }

    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    public function getJumlahAlternatif(){
    	return $this->db->query("SELECT COUNT(id_alternatif) AS total FROM tb_alternatif");
    }

    public function getAlternatifByid($id){
        $this->db->select('nama_alternatif, status');
	    $this->db->from('tb_alternatif');
		$this->db->where('id_alternatif',$id);

		$query = $this ->db ->get();

		return $query;
	}

	public function editDataAlternatif($id_alternatif, $data){
		$this->db->set($data)->where('id_alternatif', $id_alternatif)->update('tb_alternatif');
		redirect(site_url('Alternatif'));
	}
	
	public function getNilaiAlternatif($id_alternatif){
		$this->db->select('*');
		$this->db->from('tb_nilaialternatif');
		$this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif = tb_nilaialternatif.id_alternatif');
		$this->db->join('tb_kriteria', 'tb_kriteria.id_kriteria = tb_nilaialternatif.id_kriteria');
		$this->db->where('tb_nilaialternatif.id_alternatif',$id_alternatif);
		$this->db->order_by('tb_nilaialternatif.id_nilai','ASC');
		$query = $this->db->get();
		return $query;
	}

	public function getNilaiAlternatif3($id_nilai){
		$this->db->select('*');
		$this->db->from('tb_nilaialternatif');
		$this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif = tb_nilaialternatif.id_alternatif');
		$this->db->join('tb_kriteria', 'tb_kriteria.id_kriteria = tb_nilaialternatif.id_kriteria');
		$this->db->where('tb_nilaialternatif.id_nilai',$id_nilai);
		$this->db->order_by('tb_nilaialternatif.id_nilai','ASC');
		$query = $this->db->get();
		return $query;
	}

	public function getNilaiAlternatif1(){
		$this->db->select('*');
		$this->db->from('tb_nilaialternatif');
		$this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif = tb_nilaialternatif.id_alternatif');
		$this->db->join('tb_kriteria', 'tb_kriteria.id_kriteria = tb_nilaialternatif.id_kriteria');
		$query = $this->db->get();
		return $query;
	}



	/* --------------------------------   NILAI ALTERNATIF   -------------------------------------*/



	public function getNilaiAlternatif2(){
		//$this->db->select('*');
		//$this->db->from('tb_nilaialternatif');
		//$this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif = tb_nilaialternatif.id_alternatif');
		//$this->db->join('tb_kriteria', 'tb_kriteria.id_kriteria = tb_nilaialternatif.id_kriteria');
		//$query = $this->db->get();
		//return $query;

			return $this->db->query ("SELECT * FROM tb_nilaialternatif a, tb_alternatif b, tb_kriteria c WHERE a.id_alternatif=b.id_alternatif AND a.id_kriteria=c.id_kriteria ORDER BY b.id_alternatif ASC");
		
	}

	public function prosesTambahNilaiAlternatif($id_alternatif, $data){
		$this->db->set($data)->insert('tb_nilaialternatif');
	}

	public function prosesEditNilaiAlternatif($id_nilai, $data){
		$this->db->set($data)->where('id_nilai', $id_nilai)->update('tb_nilaialternatif');
	}

	public function getHitungNilaiALternatif(){
		$nilai = $this->db->select('nilai')->from('tb_nilaialternatif')->get()->result_array();
		for ($no=0; $no < count($nilai); $no++){
			
		}
	}

	public function getSearchNilaiAlternatif($filter){
		$this->db->select('*');
		$this->db->from('tb_nilaialternatif');
		$this->db->join('tb_alternatif', 'tb_alternatif.id_alternatif = tb_nilaialternatif.id_alternatif');
		$this->db->join('tb_kriteria', 'tb_kriteria.id_kriteria = tb_nilaialternatif.id_kriteria');
		$this->db->like('nama_alternatif', $filter);
		$query = $this->db->get();
		return $query;
	}
}
?>