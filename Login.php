<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		// if (empty($this->session->userdata('login'))) {
		// 	redirect('login');
		// }
	}

	public function index()
	{
		$data['tittle']='Halaman Login';
		$this->load->view('templates/header',$data);
		$this->load->view('v_login');
		$this->load->view('templates/footer');
	}
	public function login_aksi()
	{
		$user=$this->input->post('username',true);
		$pass=md5($this->input->post('password',true));

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()!=false) {
			$where=array(
				'username'=>$user,
				'password'=>$pass
			);
			$cekLogin=$this->M_login->cek_login($where)->num_rows();
			if ($cekLogin>0) {
				$sess_data=array(
					'username'=>$user,
					'login'=>'ok'
				);
				$this->session->set_userdata($sess_data);
				redirect('Dashboard/index');
			}else{
				redirect('login');
			}
		}else{
			$this->load->view('v_login');
		}

	}
	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}