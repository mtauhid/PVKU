<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_pembobotan extends CI_Model{
	function getDataBobot(){
        return $this->db->query ("SELECT * FROM tb_bobot a, tb_kriteria b, tb_skalakriteria c WHERE b.id_kriteria=c.id_kriteria AND a.id_skalakriteria=c.id_skalakriteria")->result();
    }

    function getDataSkalaKriteria($idkriteria){
    	$this->db->select('*');
	  	$this->db->from('tb_bobot');
		$this->db->join('tb_kriteria','tb_bobot.id_kriteria=tb_kriteria.id_kriteria');
		$this->db->join('tb_skalakriteria','tb_bobot.id_skalakriteria=tb_skalakriteria.id_skalakriteria');
		$this->db->where('tb_bobot.id_kriteria',$idkriteria);
		$query = $this ->db ->get();

		return $query;
    }

	function edit($data) {
        $check = $this->db->set($data)->where('id_kriteria', $data['id_skalakriteria'])->update('tb_bobot');
        if ($check) {
            $jumlah = $this->db->select('sum(bobot_awal) as total')->from('tb_bobot')->get()->row();
            $total = $jumlah->total;
            $idskl = $this->input->post('skala_kriteria');
            $kriteria = $this->db->select('*')->from('tb_bobot')->get()->result_array();
            for ($no=0; $no < count($kriteria); $no++) {
                $update = array(
                    'bobot_akhir' => $kriteria[$no]['bobot_awal'] / $total,
                    'id_skalakriteria' =>$idskl
                );
                $check_bobot = $this->db->set($update)->where('id_kriteria', $kriteria[$no]['id_kriteria'])->update('tb_bobot');
                /*
                if ($check_bobot) {
                    $boolean = TRUE;
                } else {
                    $boolean = FALSE;
                }*/
            }
            /*
            if ($boolean) {
                $response = array('status' => 'info','message' => 'Bobot Telah Disimpan');
                return json_encode($response);
            } else {
                $response = array('status' => 'error', 'message' => 'Telah Terjadi kesalahan');
                return json_encode($response);
            }
            */
        } else {
           // $response = array('status' => 'error', 'message' => 'Telah Terjadi kesalahan');
            //return json_encode($response);
        }
    }
}
?>