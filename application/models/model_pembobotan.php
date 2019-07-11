<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_pembobotan extends CI_Model{
	function getDataBobot(){
        $this->db->select('*');
        $this->db->from('tb_bobot');
        $this->db->join('tb_kriteria','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
        $this->db->join('tb_skalakriteria','tb_bobot.id_skalakriteria=tb_skalakriteria.id_skalakriteria');
        $query = $this ->db ->get();

        return $query;
    }

    public function get_data_pembobotan(){
        $this->db->select('*');
        $this->db->from('tb_bobot');
        $this->db->join('tb_kriteria','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
        $this->db->join('tb_skalakriteria','tb_bobot.id_skalakriteria=tb_skalakriteria.id_skalakriteria');
        $query = $this ->db ->get();

        return $query;
    }

    public function getSkalaKriteriaById($id_kriteria){
        $this->db->select('*');
        $this->db->from('tb_skalakriteria');
        $this->db->join('tb_kriteria','tb_kriteria.id_kriteria=tb_skalakriteria.id_kriteria');
        $this->db->where('tb_kriteria.id_kriteria',$id_kriteria);
        $query = $this ->db ->get();

        return $query;
    }

    function getDataSkalaKriteria($id_kriteria){
    	$this->db->select('*');
	  	$this->db->from('tb_bobot');
		$this->db->join('tb_kriteria','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
		$this->db->join('tb_skalakriteria','tb_bobot.id_skalakriteria=tb_skalakriteria.id_skalakriteria');
		$this->db->where('tb_bobot.id_kriteria',$id_kriteria);
		$query = $this ->db ->get();

		return $query;
    }

    public function getNilaiSkalaBobotById($id_kriteria){
        $this->db->select('*');
        $this->db->from('tb_bobot');
        $this->db->join('tb_kriteria','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
        $this->db->join('tb_skalakriteria','tb_bobot.id_skalakriteria=tb_skalakriteria.id_skalakriteria');
        $this->db->where('tb_bobot.id_kriteria',$id_kriteria);
        $query = $this ->db ->get();

        return $query;
    }

    public function getNilaiSkalaForBobotById($skala_kriteria){
        $this->db->select('*');
        $this->db->from('tb_skalakriteria');
        $this->db->join('tb_kriteria','tb_kriteria.id_kriteria=tb_skalakriteria.id_kriteria');
        $this->db->where('tb_skalakriteria.id_skalakriteria',$skala_kriteria);
        $query = $this ->db ->get();

        return $query;
    }

	function edit($data, $id_kriteria) {
        $check = $this->db->set($data)->where('id_kriteria', $id_kriteria)->update('tb_bobot');
        if ($check) {
            $jumlah = $this->db->select('sum(bobot_awal) as total')->from('tb_bobot')->get()->row();

            $total = $jumlah->total;

            $kriteria = $this->db->select('*')->from('tb_bobot')->get()->result_array();

            for ($no=0; $no < count($kriteria); $no++) {
                $update = array(
                    'bobot_akhir' => $kriteria[$no]['bobot_awal'] / $total
                );
                $check_bobot = $this->db->set($update)->where('id_kriteria', $kriteria[$no]['id_kriteria'])->update('tb_bobot');

            }
        } else {
           
        }
    }
}
?>