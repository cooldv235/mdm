<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		$this->logged_in();
        
	}

	private function logged_in() {
		if(! $this->session->userdata('authenticated')){
			redirect('admin/login');
		}
	} 

	public function index(){
		$data['title'] = "Schools";

        $this->load->view('admin_theme/header', $data);
        $this->load->view('schools/index', $data);
        $this->load->view('admin_theme/footer', $data);

	}
}