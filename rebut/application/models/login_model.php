<?php
class login_model extends CI_Model{
	
	function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$query=$this->db->get_where('user',array('username'=>$username,'password'=>$password));
		return $query->row();
	}
}
?>