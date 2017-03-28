<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_login extends CI_Model {

    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

    function actLogin(){
        $u = $this->input->post("username");
        $p = md5($this->input->post("password"));
        $login = $this->db->query("select username,password from admin where username='$u' and password='$p'");
        if($login->num_rows() == 1){
            return $login->row();
        }else{
            return '';
        }
    }

    public function checkLoginAdmin(){
            $username=$_POST['username'];
            $password= md5($_POST['password']);
            $query = $this->db->get_where('admin', array('username'=> $username,'password'=>$password));
            return $query->num_rows();
    }

    public function checkLoginUser(){
            $username=$_POST['username'];
            $password= md5($_POST['password']);
            $query = $this->db->get_where('user', array('username'=> $username,'password'=>$password));
            return $query->num_rows();
    }

    public function findByDynamicColumnAdmin($array){
            $query = $this->db->get_where('admin', $array);
            return $query->result_array();
    }

    public function findByDynamicColumnUser($array){
            $query = $this->db->get_where('user', $array);
            return $query->result_array();
    }
}
