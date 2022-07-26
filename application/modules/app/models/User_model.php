<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class User_model extends CI_Model{

    function __construct() {
        parent:: __construct();

    }//constructor

    public function fetch_all_users(){
        $this->db->select("*");
        $this->db->from('user');
        $query = $this->db->get();        
        // return $query->result();
        return $query->result_array();


    }
    
    public function insert($data){
        $this->db->insert('user',$data);
        return $this->db->insert_id();
    }

    public function delete_row($id){
        $this -> db -> where('id', $id);
        $this -> db -> delete('user');
    }

    public function update($id,$data) {
        // echo $id;
        // print_r($data);
        $this -> db -> where('id', $id);
        $this->db->update('user',$data);
    }

}