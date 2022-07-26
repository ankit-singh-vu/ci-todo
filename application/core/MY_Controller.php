<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class MY_Controller extends MX_Controller {

    public $data;

    function __construct() {
        parent:: __construct();
        date_default_timezone_set("Asia/Kolkata");

        // $this->load->model('Auth_model');
        // $this->load->model('commonmodel');
        // $this->load->model('Sitter_model','kola');
        // if( $this->session->has_userdata('user_id') ){ 
        //     $this->data['head_data'] = array(
        //         'sitter_status' => $this->Auth_model->get_sitter_status($this->session->userdata('user_id')),
        //         'fname'         => $this->Auth_model->get_user_fname($this->session->userdata('user_id')),
        //     );
        // }else{
        //     $this->data['head_data'] = array(
        //         'sitter_status' => '99'
        //     );
        // }
    }//constructor
   
}