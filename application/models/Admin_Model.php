<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{
    
    public function login($email,$password)
    {
        $this->db->select('email');
        $this->db->select('password');
        $this->db->select('active');

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $this->db->where('active',1);
        $query = $this->db->get('admin');

        if($query->num_rows() == 1){
            return $query->row();
        }
        return false;
    }
}
