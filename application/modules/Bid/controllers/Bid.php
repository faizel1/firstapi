<?php defined('BASEPATH') or exit('No direct script access allowed');


class Bid extends MY_Controller
{
    //
    public $CI;

    protected $data = array();

    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();
        $this->load->view('header');
        $this->load->library('session');
        $this->load->model('Bid_Model');
    }



    public function index()
    {
        $this->load->library('bootpag');
        $this->bootpag->whereto('Bid/index','bidders');


        //if(!isset($_SESSION['username']))
        //redirect('Validation_c2');
        
        $order=$this->input->get('id');


        // $_POST['aucid']; is from homepage hidden input

        if ($this->input->post('search')) {
            $_SESSION['pos']=$this->input->post();
            unset($_SESSION['pos']['search']);
        
            foreach ($_SESSION['pos'] as $key=>$value) {
                if ($value) {
                    $data[$key]=$value;
                }

                $bid['data']=$this->Bid_Model->searchn("bidders", $data, 5, $this->uri->segment(3));
            }
        }

        if (!($this->input->post('search')) or $this->input->post('showall')) {
            $bid['data']=$this->Bid_Model->sort("bidders", $order, 5, $this->uri->segment(3));
        }

        $this->load->view('Bid/dispbid', $bid);
    }


    public function newbid()
    {
       

        $this->load->view('bid/insbid');

        if (isset($_POST['save'])) {
            $data=array(
                'auctionid'=>$_POST['auctionid'],
                'userid'=>$_POST['userid'],
                'bidamount'=>$_POST['bidamount'],
                
            );
            $bid['data']=$this->Bid_Model->adddata($data, 'bidders');

            
        }
        

        if ($bid) {
            redirect('Bid');
        }
    }
    public function updatebid($id)
    {
        $x=0;
        $array=array("bidid"=>$id);
    
        $pos['dat']=$this->Bid_Model->getonedata($array, 'bidders');
        $this->load->view('Bid/updbid', $pos);


        if (isset($_POST['update'])) {
            $data=array(
            'auctionid'=>$_POST['auctionid'],
            'userid'=>$_POST['userid'],
            'bidamount'=>$_POST['bidamount'],
            
        );
        
            $bid['data']=$this->Bid_Model->updatedata($data, $array, 'bidders');
            if ($bid!=null) {
                $this->session->set_flashdata('alert', "You have updated bid number $id successfully");
                $x++;
                ;
            }
        }

        if ($x==1) {
            redirect('Bid');
        }
    }

    public function deletebid($id)
    {
        $array=array("bidid"=>$id);

    
        $this->Bid_Model->deletedata($array, 'bidders');
        $bid['data']=$this->Bid_Model->sort('bidders');
        //	if($bid!=null)
        //	$this->session->set_flashdata('alert', "You have deleted bid number $id successfully");

        redirect('Bid');
    }
}
