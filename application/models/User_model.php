<?php

class User_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_userdata($userName,$password){
         $this->db->where('user_name',$userName);
         $this->db->where('user_password',$password);
         $query = $this->db->get('user_login');
         $row = $query->row_array();
         return $row;
    }

    public function set_userdata($userName,$email,$password){
        $data = array(
             'user_name' => $userName,
             'user_email' => $email,
             'user_password' => $password
        );

        return $this->db->insert('user_login',$data);
    }

}