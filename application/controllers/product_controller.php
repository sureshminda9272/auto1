<?php
class product_controller extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('product_model','product');
        $this->load->library('form_validation');
    }

    public function get_all()
    {
        $data['details']=$this->product->get_all();
        //echo print_r($data);exit;
        $this->load->view('product_view',$data);
    }

    public function show($pid)
    {
        $data['details']=$this->product->show($pid);
        $this->load->view('show1_view',$data);
    }

    // to demonstrate purpose created this function
    public function todemonstrategit(){

    }

     public function edit($pid)
     {
        $data['information']=$this->product->show($pid);
        $this->load->view('edit1_view',$data);
     }

     public function edit2()
     {
        $data=$this->input->post(); 
        $this->product->edit2($data);
        $data['details']=$this->product->get_all();
        $this->load->view('product_view',$data);
     }


     public function delete($pid)
     {
        $this->product->delete($pid);
        $data['details']=$this->product->get_all();
        $this->load->view('product_view',$data);
     }

     public function insert()
     {
        $this->load->view('insert1_view');
     }

     public function insert2()
     {
        $data=['pid'=>$this->input->post('pid'),
        'pname'=>$this->input->post('pname'),
        'price'=>$this->input->post('price'),
        'pqnty'=>$this->input->post('pqnty'),
      ];
        $this->product->insert_data($data);
        $data['details']=$this->product->get_all();
        $this->load->view('product_view',$data);

     }

public function login()
{
   $this->load->view("login");
}

public function registration()
{
   $this->load->view("registration");
}

/*public function regsuccess()
{
   $this->load->view("regsuccess");
}*/

}
?>