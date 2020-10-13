<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_Model');
		
    } 

	public function login()
	{   
		if($this->session->userdata('authenticated')){
			redirect('dashboard');
		}
		$data['title'] = "Login";

        
        $this->form_validation->set_rules('email','email','trim|required|valid_email');
        $this->form_validation->set_rules('password','password','required');
		
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

	 if($this->form_validation->run() == false)
	 {
		$this->load->view('templates/header');
        $this->load->view('admin/login', $data);
		
	 }
	 else{
		 $email = $this->security->xss_clean($this->input->post('email'));
		 $password = $this->security->xss_clean($this->input->post('password'));
		 
		 $admin = $this->Admin_Model->login($email,$password);

		//  echo "<pre>";print_r($admin);exit;

		 if($admin){
			 $userdata = array(
				 'id' => $admin->id,
				 'first_name' => $admin->first_name,
				 'last_name' => $admin->last_name,
				 'authenticated' => TRUE

			 );

			 $this->session->set_userdata($userdata);

			 redirect('dashboard');
		
		 }
		 else{
			 $this->session->set_flashdata('message','Invalid email or Password');
			 redirect('admin/login');
		 }
	 }
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/index');
	}

}