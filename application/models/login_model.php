<?php
class login_model extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function checklogincredential($data){
        $this->db->select("*");
        $this->db->from('registration');
        $this->db->where(array('Email'=>$data['email'], 'Password'=>$data['password']));
        $query = $this->db->get();
       // echo $this->db->last_query();exit;
        return $query->result_array();

    }
}
?>