<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      } 
      private function logged_in()
    {
        if( ! $this->session->userdata('authenticated')){
            redirect('admin/login');
        }
    }
    
	
      public function index() {
			
         /* Load form validation library */ 
         $this->load->library('form_validation');
			
	 /* Validation rule */
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	 $this->form_validation->set_rules('password', 'Password', 'required');	 
			
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('adminpanel/loginview'); 
         } 
         else { 
			$this->load->model('login_model');
			$result = $this->login_model->login();
			if ($result > 0){

                $this->session->set_userdata($userdata);
                
              		
			redirect('admin/dashboard');
		}
			else 
			  { 
				$msg = "The email or password you entered is incorrect.";
				$this->load->view('adminpanel/loginview', compact('msg'));
			  } 
		}
	} 
		
	public function dashboard()
	  {
	    $this->load->view('adminpanel/dashboard');	
	  }
	   public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
 }


