<?php
class Lainnya extends CI_Controller{
	public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('Login');
        };
        $this->load->database();
        $this->load->model('model_lainnya');
        $this->load->model('model_user');
    }
	public function index(){
		
		$data=array(
			'data_user'=>$this->model_user->getUser()->result(),
			'content'=>'vLainnya'
		);

		$this->load->view('template/template',$data);
	}

	public function tambahUser(){
		$data = array(
			'content' => 'vTambahUser'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesTambahUser(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'nama_user' => $nama,
			'username' => $username,
			'password' => md5($password),
			'level' => $level
		);
		$this->model_user->tambahUser($data);
	}

	public function editUser(){
		$id_user = $this->uri->segment(3);
		$data_user = $this->model_user->getUserById($id_user)->row();
		$data = array(
			'data_user'=> $data_user,
			'content' => 'vEditUser'
		);
		$this->load->view('template/template',$data);
	}

	public function prosesEditUser(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'nama_user' => $nama,
			'username' => $username,
			'password' => md5($password),
			'level' => $level
		);
		$this->model_user->editUser($data, $id_user);
	}

	public function user_setting(){
		$id_user = $this->uri->segment(3);
		$data_user = $this->model_user->getUserById($id_user)->row();
		$data = array(
			'data_user'=> $data_user,
			'content' => 'vUserSetting'
		);
		$this->load->view('template/template',$data);
	}

	public function edit_user_no_pass(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$level = $this->input->post('level');

		$data = array(
			'nama_user' => $nama,
			'username' => $username,
			'level' => $level
		);
		$this->model_user->editUser($data, $id_user);
		redirect(site_url("Lainnya/user_setting/".$id_user));
	}

	public function edit_pass(){
		$id_user = $this->input->post('id_user');
		$pass = $this->input->post('password');

		$data = array(
			'password' => md5($pass)
		);
		$this->model_user->editUser($data, $id_user);
		redirect(site_url("Lainnya/user_setting/".$id_user));
	}
	public function edit_user_no_pass_1(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$level = $this->input->post('level');

		$data = array(
			'nama_user' => $nama,
			'username' => $username,
			'level' => $level
		);
		$this->model_user->editUser($data, $id_user);
		redirect(site_url("Lainnya"));
	}

	public function edit_pass_1(){
		$id_user = $this->input->post('id_user');
		$pass = $this->input->post('password');

		$data = array(
			'password' => md5($pass)
		);
		$this->model_user->editUser($data, $id_user);
		redirect(site_url("Lainnya"));
	}

	public function hapusUser(){
		$id_user = $this->uri->segment(3);
		$this->model_user->hapusUser($id_user);
		redirect(site_url("Lainnya"));
	}
}
?>