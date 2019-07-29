<?php
// error_reporting(0);
class Login extends CI_Controller{
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('model_login');
    }
	public function index(){
		//$data_nilaialternatif = $this->model_alternatif->getNilaiAlternatif1()->row();
		//$data=array(
		//	'data_alternatif'=>$this->model_alternatif->getAlternatif(),
		//	'data_nilaialternatif' => $data_nilaialternatif,
		//	'content'=>'vAlternatif'
		//);
		$this->load->view('vLogin');
	}

	function cekLogin() {
        
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $where = array(
        	'username' => $username,
        	'password' => $password
        );
       
        $result=null;
        if (!empty($username) && !empty($password)) {
            $result = $this->model_login->login($username, $password);
        }
        
        if($result) {
            $sess_array = array();
            // print_r($result);
            // die();
            if ($result=='3') {
                $tes['errVar']=1;
                $this->load->view('vLogin',$tes);
            } else {
                foreach($result as $row) {
                    $sess_array = array(
                        'id_user' => $result->id_user,
                        'nama_user' => $result->nama_user,
                        'username'=>$result->username,
                        'password' => $result->password,
                        'level_user' => $result->level,
                        'login_status'=>true,
                    );
                    
                    $this->session->set_userdata($sess_array);
                    redirect('Dashboard','refresh');
                }
            }
            return TRUE;
        } else {
            
            $tes['errVar']=2;
            $this->load->view('vLogin',$tes);
            // redirect('Dashboard','refresh');
            // return FALSE;
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
?>