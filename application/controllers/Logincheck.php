<?php
class Logincheck extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model', 'login');
        $this->load->model('product_model','product');
    }

    /*
     * Summary of checklogin
     *  @return void
     */
    public function checklogin(){
        // echo 'lllkd';exit;
        $data['email'] = $this->input->post('log');
        $data['password'] = $this->input->post('pass');
       // print_r($data);exit;
       $data['login'] = $this->login->checklogincredential($data);
    
       //print_r($data);exit;
       if (isset($data['login']) && !empty($data['login'])) {
        $data['details']=$this->product->get_all();
        //echo print_r($data);exit;
        $this->load->view('product_view',$data);
       } else {
        $data['invalid'] = "Invalid Credentails";
        $this->load->view('login', $data);
       }
        
        }


}
?>