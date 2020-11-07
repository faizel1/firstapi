
<?php
class Validation_Model extends MY_Model
{

   function __construct() {
      parent::__construct();
     $this->load->model('My_Model');
  }

 

      public function getonedata($id,$table){
         return $this->My_Model->getonedata($id,$table);
      }    
            
      public function adddata($data,$table){

         return $this->My_Model->adddata($data,$table);
   
      }  



     





}







?>