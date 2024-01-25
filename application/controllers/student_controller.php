<?php
class student_controller extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->helper('url');
        $this->load->model('student_model','student');
    }

    public function get_all()
    {
        $data['details']=$this->student->get_all();
        $this->load->view('student_view',$data);
    }

    public function show($Id)
    {
        $data['show']=$this->student->show($Id);
        //print_r($data);exit;
        // echo "hello":
        $this->load->view('show_view',$data);
    }

    public function delete($id) {
        //echo $id;exit;
        $this->student->delete($id);
        $this->load->view("delete_sucess");
    }

    public function edit($Id)
    {
        $data['information']=$this->student->show($Id);
        //print_r($data['information']);exit;
        $this->load->view('edit_view',$data);

    }
    public function edit1()
    {
        $data = $this->input->post();
        //print_r($data);exit;
        $this->student->update($data);
        $this->load->view('edit_success', $data);
    }


   

    public function insert_call(){
        $this->load->view('insert_view');
    }

    public function insert(){
        $data=['Id'=>$this->input->post('Id'),
        'Firstname'=>$this->input->post('Firstname'),
        'Lastname'=>$this->input->post('Lastname'),
    ];
        $this->student->insert_data($data);

        $data['details']=$this->student->get_all();
        $this->load->view('student_view',$data);
    }
}