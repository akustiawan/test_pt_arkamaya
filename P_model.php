<?php

class P_model extends CI_Model
{
	
	public function get_project()
	{
		$this->db->select('*');
		$this->db->from('tb_m_project');
		$query=$this->db->get();
		return $query;
	}
	public function get_client()
	{
		$this->db->select('*');
		$this->db->from('tb_m_client');
		$this->db->join('tb_m_project','tb_m_project.project_id=tb_m_client.client_id');
		$query=$this->db->get();
		return $query;
	}

	function joins()
	{
		$this->db->select('*');
		$this->db->from('tb_m_client');
		$this->db->join('tb_m_project','tb_m_project.project_id=tb_m_client.client_id');
		$query=$this->db->get();
		return $query;
	}

	

}