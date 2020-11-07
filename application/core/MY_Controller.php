<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . "third_party/MX/Controller.php";


class MY_Controller extends MX_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('session');

        
      //  if(!isset($_SESSION['username']))
      // redirect('Validation');
       
    }



    public function save($data,$table,$redirect)
    {
        

        $this->load->view('bid/insbid');

        if (isset($_POST['save'])) {
            $data=array(
                'auctionid'=>$_POST['auctionid'],
                'userid'=>$_POST['userid'],
                'bidamount'=>$_POST['bidamount'],
                
            );
            $bid['data']=$this->model->adddata($data, $table);

         
        }
        

        if ($bid) {
            redirect($redirect);
        }
    }

    public function updatebid($id)
    {
        $x=0;
        $array=array("bidid"=>$id);
    
        $pos['dat']=$this->model->getonedata($array, 'bidders');
        $this->load->view('bid/updbid', $pos);


        if (isset($_POST['update'])) {
            $data=array(
            'auctionid'=>$_POST['auctionid'],
            'userid'=>$_POST['userid'],
            'bidamount'=>$_POST['bidamount'],
            
        );
        
            $bid['data']=$this->model->updatedata($data, $array, 'bidders');
          
        }

        if ($bid) {
            redirect('index.php/bid');
        }
    }

    public function deletebid($id)
    {
        $array=array("bidid"=>$id);
         $this->model->deletedata($array, 'bidders');
     
        redirect('index.php/bid');
    }
}




/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */