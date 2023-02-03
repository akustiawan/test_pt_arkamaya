<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('P_model');
		if (empty($this->session->userdata('login'))) {
			redirect('login');
		}
	}
	public function index()
	{
		$data['tittle']='Halaman Admin';
		$data['project']=$this->P_model->get_project()->result();
		$data['client']=$this->P_model->get_client()->result();
		$data['join_table']=$this->P_model->joins()->result();
		$this->load->view('templates/header',$data);
		$this->load->view('dashboard/index',$data);
		
	}

	
	
} 