<?php
class product_model extends CI_Model
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->helper('url');
        $this->load->database();
    }


    public function get_all()
    {
        $data=$this->db->get('product');
        return $data->result();
    }

    public function show($pid)
    {
        $data=$this->db->get_where('product',['pid'=>$pid]);
        return $data->row();
    }

    public function edit2($data)
    {   
    
        $data=$this->db->where('pid',$data['pid'])->update('product',$data);
        return $data;
    }

    public function delete($pid)
    {
        $data=$this->db->delete('product',['pid'=>$pid]);
        return $data;
    }

    public function insert_data($data)
    {
        $this->db->insert('product',$data);
    }

   
}
?>