<?php
class student_model extends CI_Model
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->database();
    }

    public function get_all()
    {
        $data=$this->db->get('student');
        return $data->result();
    }

    public function show($Id)
    {
        $data=$this->db->get_where('student',['Id'=> $Id]);
        return $data->row();
    }



    public function delete($id){
        $this->db->delete('student', array("Id" => $id));
        

    }


    public function update($data)
    {
        $data=$this->db->where('Id',$data['Id'])->update('student',$data);

        return $data;
    }

    public function insert_data($data){
        $result=$this->db->insert('student',$data);
        //return $result;
    }
}
?>