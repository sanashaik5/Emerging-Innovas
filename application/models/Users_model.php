<?php
/**
 * Description of Export Controller
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
  // declare private     public function saveCustomer()
      public function saveCustomer()
    {
     $data['username'] = $this->input->post('username');
     $data['email'] = $this->input->post('email');
     $data['password'] = $this->input->post('password');
     
     $this->db->insert('backendusers', $data);
    }
}
?>