<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->logged_in();
        
	} 
	
	private function logged_in() {
		if(! $this->session->userdata('authenticated')){
			redirect('admin/login');
		}
	}

	public function index()
	{
		$data['title'] = "Dashboard";

        
        $this->load->view('dashboard/index', $data);
	}

}