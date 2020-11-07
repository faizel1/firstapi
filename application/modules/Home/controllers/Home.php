<?php defined('BASEPATH') or exit('No direct script access allowed');


class Home extends MY_Controller
{

    protected $data = array();

    public function __construct(){

parent::__construct();
$this->load->view('header');

$this->load->model('Home_Model');


}




public function index(){
    
   // if(!isset($_SESSION['username']))
//	redirect('Validation_c2');
$result['data']=$this->Home_Model->getdata('auction');
 $this->load->view('Home/disphome',$result);



}







}


?>