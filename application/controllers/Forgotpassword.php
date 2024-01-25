<?php
defined('BASEPATH') or die('No direct access allowed');

class Forgotpassword extends CI_Controller {


        public function __construct(){
            parent::__construct();
            $this->load->model("forgotpassword_model", "forgotpassword" );
        }

        public function changepassword(){
            $this->load->view('forgot');
        }

        public function update_password(){
            $data = $this->input->post();
            $this->forgotpassword->addpassword($data);
            
            $data['update_success'] = "Password Reset Successfully...";

            $this->load->view("login",$data);
        }

}


?>