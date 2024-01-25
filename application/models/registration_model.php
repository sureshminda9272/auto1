<?php
class registration_model extends CI_Model
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->database();
    }

    public function get_all()
    {
        $data=$this->db->get('registration');
        return $data->result();
    }

    public function regdata($data)
    {
        $this->db->insert('registration',$data);
    }

}
?>