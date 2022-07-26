<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Home extends MY_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('User_model');

    }//constructor

    public function index(){
        $data['user']=$this->User_model->fetch_all_users();
        // echo '<pre>';print_r($data);
        $this->load->view('home/home',$data);
        
    }

    public function reload(){
        $data['user']=$this->User_model->fetch_all_users();
        $output=$this->load->view('home/user_ajax',$data);
        echo $output;
    }


    public function add(){
        echo "hi";
        echo $this->input->post('name');
        $data = array(
            'name' => $this->input->post('name'),
        );
        $user_id = $this->User_model->insert($data);
        echo $user_id;
    }    


    public function check(){
        echo "hi";
        echo $is_striked =$this->input->post('is_striked');
        echo $id=$this->input->post('id');
        $data = array(
            'is_striked' => $is_striked
        );

        print_r($data);
        $user_id =$this->User_model->update($id,$data);
    }    

    public function update(){
        // echo "update";
         $name =$this->input->post('name');
         $id=$this->input->post('id');

          
        $data = array(
            'name' => $name
        );

        print_r($data);
        $user_id =$this->User_model->update($id,$data);
    }    

    

    public function delete(){
        echo "delete";
        echo $this->input->post('id');
        $id = $this->input->post('id');
        
         $this->User_model->delete_row($id);
        // echo $user_id;
    }  

    public function csv(){
        echo "csv";
        die;
        // echo $user_id;
    }  

}    