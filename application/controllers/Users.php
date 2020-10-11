<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function signup()
    {
        $data['title'] = "sign up";

        $this->form_validation->set_rules('first_name','first name','trim|required');
        $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[users.email');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('passwordconf','confirm password','required|matches[password]');


        $this->load->view('users/signup', $data);
        $this->load->view('home/index',$data );
    }
}