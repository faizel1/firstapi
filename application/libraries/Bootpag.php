<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Bootpag extends MY_Controller {

    function __construct() {
        parent::__construct();
   	$this->load->model('MY_Model');

    }


        	
public function whereto($url,$table){
	$count=count($this->MY_Model->getdata($table));

$ci=& get_instance();
    $ci->load->library('pagination');


$config['base_url'] = 'http://localhost/hm/index.php/'.$url;
$config['total_rows'] = $count;
$config['per_page'] = 5;
$config['num_links'] = 10;
$config['full_tag_open'] = '<ul class="pagination">';        

$config['full_tag_close'] = '</ul>';        

$config['first_tag_open'] = '<li>';        

$config['first_tag_close'] = '</li>';        

$config['prev_link'] = '«'; 

$config['prev_tag_open'] = '<li>';        

$config['prev_tag_close'] = '</li>';        

$config['next_link'] = '»';        

$config['next_tag_open'] = '<li>';        

$config['next_tag_close'] = '</li>';        

$config['last_tag_open'] = '<li>';        

$config['last_tag_close'] = '</li>';        

$config['cur_tag_open'] = '<li class="active"><a href="#">';        

$config['cur_tag_close'] = '</a></li>';        

$config['num_tag_open'] = '<li>';        

$config['num_tag_close'] = '</li>';

//return $config;
$ci->pagination->initialize($config);

}
}