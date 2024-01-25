<?php
class registration_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('registration_model', 'registration');
    }

    public function get_all()
    {
        $data['details'] = $this->registration->get_all();
        $this->load->view('registration_view', $data);
    }

    public function signup()
    {
        $this->load->view('registration');
    }

    public function getregdata()
    {

        $data = [   
            'Username' => $this->input->post('name'),
            'Email' => $this->input->post('mail'),
            'Phonenumber' => $this->input->post('number'),
            'Password' => $this->input->post('pass'),
            'Confirmpassword' => $this->input->post('confp'),
        ];
        $this->registration->regdata($data);
        /*$data['details']=$this->registration->get_all();
        $this->load->view('registration_view',$data);*/
        $data['register_success'] = "Register Successfully...";
        // print_r($data);exit;
        $this->load->view("login", $data);
    }


}
?>