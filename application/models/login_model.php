<?php
class Login_model extends CI_Model
{
    public function login()
    {
	   $email = $this->input->post('email');
	   $password = $this->input->post('password');
	   $query = $this->db->where(['email' => $email, 'password' => $password])->get('backendusers');
	   return (int) $query->num_rows();
    }
}