<?php
class forgotpassword_model extends CI_Model{
    public function __construct(){
        parent :: __construct();
        $this->load->database();
    }

    public function addpassword($data){
        $this->db->where("Email",$data["email"])->update("registration",$data);
    }


}
?>