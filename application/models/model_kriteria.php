<?php
class model_kriteria extends CI_Model{
	function __construct(){
		parent::__construct();
	}
    function getKriteria(){
        return $this->db->query ("SELECT * from tb_kriteria")->result();
    }

    function insertKriteria(){
        $this->db->insert('tb_kriteria');
    }


    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }


    public function getKriteriaByid($id_kriteria){
        $this->db->select('*');
	    $this->db->from('tb_kriteria');
		$this->db->where('id_kriteria',$id_kriteria);

		$query = $this ->db ->get();

		return $query;
	}

	public function editDataKriteria($id_kriteria, $data){
		$this->db->set($data)->where('id_kriteria', $id_kriteria)->update('tb_kriteria');
		redirect(site_url('Kriteria'));
	}

	public function getSkalaKriteria($id_kriteria){
		$this->db->select('*');
		$this->db->from('tb_skalakriteria');
		$this->db->join('tb_kriteria', 'tb_skalakriteria.id_kriteria=tb_kriteria.id_kriteria');
		$this->db->where('tb_skalakriteria.id_kriteria',$id_kriteria);
		$query = $this->db->get();
		return $query;
	}

	public function getSkalaKriteria2($id_skalakriteria){
		$this->db->select('*');
		$this->db->from('tb_skalakriteria');
		$this->db->join('tb_kriteria', 'tb_skalakriteria.id_kriteria=tb_kriteria.id_kriteria');
		$this->db->where('tb_skalakriteria.id_skalakriteria',$id_skalakriteria);
		$query = $this->db->get();
		return $query;
	}

	public function tambahSkalaKriteria($id_skala_kriteria, $data){
		$this->db->set($data)->where('id_kriteria', $id_kriteria)->insert('tb_skalakriteria');
	}

	public function prosesEditSkalaKriteria($id_skalakriteria, $data){
		$this->db->set($data)->where('id_skalakriteria', $id_skalakriteria)->update('tb_skalakriteria');
	}

	public function get_data_skala_kriteria_byid($id_kriteria){
        $query="select * from tb_skalakriteria where id_kriteria='$id_kriteria'";
        $q=$this->db->query($query);
        if($q->num_rows()>0){
            foreach ($q->result() as $row) {
                $data[]=$row;
            }
            return $data;
        }
	}

	public function get_data_jenis_kriteria_byid($id){
        $this->db->select('*');
	    $this->db->from('tb_kriteria');
		$this->db->where('id_kriteria',$id);
		$query = $this ->db ->get();

		return $query;
	}

	public function get_skala_kriteria_byid($id_kriteria){
    $this->db->select('*');
	  $this->db->from('tb_kriteria');
		$this->db->join('tb_skalakriteria','tb_kriteria.id_kriteria=tb_skalakriteria.id_kriteria');
		$this->db->where('tb_bobot.id_kriteria',$id_kriteria);
		$query = $this ->db ->get();

		return $query;
	}

	public function getBobotByid($id){
        $this->db->select('*');
		$this->db->from('tb_bobot');
		$this->db->join('tb_kriteria', 'tb_bobot.id_kriteria = tb_kriteria.id_kriteria','tb_kriteria.id_kriteria = tb_skalakriteria.id_kriteria');
		$this->db->join('tb_skalakriteria', 'tb_bobot.id_skalakriteria = tb_skalakriteria.id_skalakriteria');
		$this->db->where('tb_bobot.id_bobot',$id);
		$query = $this->db->get();
		return $query;
	}

	public function get_data_skala_sum(){
		$this->db->select('*');
		$this->db->from('tb_bobot');
		$this->db->join('tb_kriteria', 'tb_bobot.id_kriteria = tb_kriteria.id_kriteria');
		$this->db->join('tb_skalakriteria', 'tb_bobot.id_skalakriteria = tb_skalakriteria.id_skalakriteria');
		$query = $this->db->get();
		return $query;
	}

	public function sum_bobot(){
		return $this->db->query ("SELECT SUM(bobot_awal) AS sumsk FROM tb_bobot")->result();
	}


	public function getSkalaKriteriaByid($id){
		$this->db->select('*');
		$this->db->from('tb_skalakriteria');
		$this->db->join('tb_kriteria', 'tb_skalakriteria.id_skalakriteria=tb_kriteria.id_kriteria');
		$this->db->where('tb_skalakriteria.id_skalakriteria',$id);
		$query = $this->db->get();
		return $query;
	}

	public function getSkala($idskala){
        $this->db->select('*');
		$this->db->from('tb_skalakriteria');
		$this->db->where('id_skalakriteria',$idskala);
		$query = $this->db->get();
		return $query;
	}

	public function getAllBobot(){
		$this->db->select('*');
	  $this->db->from('tb_bobot');
		$this->db->join('tb_kriteria','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
		$this->db->join('tb_skalakriteria','tb_bobot.id_skalakriteria=tb_skalakriteria.id_skalakriteria');
		$this->db->where('tb_bobot.id_kriteria',$id_kriteria);
		$query = $this ->db ->get();

		return $query;
	}

	public function sumAllBobot(){
		$query = "SELECT sum(b.nilai_kriteria) as hasilba FROM tb_bobot a, tb_skalakriteria b, tb_kriteria c WHERE c.id_kriteria=a.id_kriteria AND b.id_skalakriteria=a.id_skalakriteria AND c.id_kriteria=b.id_kriteria LIMIT 0,1";
		return $query;
	}

}
?>
