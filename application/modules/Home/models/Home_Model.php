
<?php
class Home_Model extends MY_Model
{
         public function getdata($table){
         $this->load->model('My_Model');

      return $this->MY_Model->getdata($table);   
      
      }       
}







?>