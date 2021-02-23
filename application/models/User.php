<?php
class User extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    }
    public function login($email)
    {
        $this->db->select('password');
        $info=$this->db->where('email',$email)->get('user')->row();
        return $info;
    }
} 