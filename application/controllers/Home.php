<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('form_validation');
		
    } 

	public function index(){
		
		$this->load->view('templates/header');
		$this->load->view('home/index');
		$this->load->view('templates/footer');

	}
}