<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    
    }

    public function ech(){
       echo 832974897348974839;
    }

    public function getdata($table){

        return $this->db->get($table)->result();   
        
        }  

    public function search($table,$column,$title){

        return $this->db->get_where($table, array($column => $title))->result();
     
     }

     public function searchn($table,$criteria,$limit="",$start=""){
        return $this->db->get_where($table, $criteria,$limit,$start)->result();

     }

     public function sort($table,$orderby="",$limit="",$start=""){

        $this->db->limit($limit, $start); 
        $this->db->order_by($orderby, "asc");
        return $this->db->get($table)->result();
        
     }   

     public function getonedata($id,$table){
        return $this->db->get_where($table, $id)->result();         
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