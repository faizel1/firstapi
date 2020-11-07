
<?php
class Bid_Model extends MY_Model
{

   function __construct() {
      parent::__construct();
     $this->load->model('My_Model');
  }

    


      public function search($table,$column,$title){

         return $this->My_Model->search($table,$column,$title);
      
      }

      public function searchn($table,$criteria,$limit="",$start=""){
         return $this->My_Model->searchn($table,$criteria,$limit,$start);

      }

      public function sort($table,$orderby="",$limit="",$start=""){
         return $this->My_Model->sort($table,$orderby,$limit,$start);

       //  $this->db->limit($limit, $start); 
        // $this->db->order_by($orderby, "asc");
        // return $this->db->get($table)->result();
         
      }   

      public function getonedata($id,$table){
         return $this->My_Model->getonedata($id,$table);
 
       //  return $this->db->get_where($table, $id)->result();         
      }    
            
      public function adddata($data,$table){
         return $this->My_Model->adddata($data,$table);

       //  return $this->db->insert($table, $data); 
   
      }  
      public function deletedata($id,$table){
         return $this->My_Model->deletedata($id,$table);

      //   return $this->db->delete($table,$id); 

      }

      public function updatedata($data,$id,$table){
         return $this->My_Model->updatedata($data,$id,$table);
 
//         return $this->db->update($table, $data , $id);

      }


     





}







?>