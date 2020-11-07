<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class ApiModel extends CI_Model {

    function __construct() {
        parent::__construct();
    
    }



    public function getdata($table){

        return $this->db->get($table)->result();   
        
        }  

     public function getonedata($id,$table){
        return $this->db->get_where($table, $id)->row();         
     }    
           
     public function adddata($data,$table){

        return $this->db->insert($table, $data); 
  
     }  
     public function deletedata($id,$table){
        return $this->db->delete($table,$id); 

     }

     public function updatedata($data,$id,$table){

        return $this->db->update($table, $data , $id);

     }



}