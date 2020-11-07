<?php defined('BASEPATH') or exit('No direct script access allowed');




class Auction extends MY_Controller
{
   

    public $data = array();
    


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->view('header');
        $this->load->model('Auction_Model');
    }

    public function index($order="")
    {
        //if(!isset($_SESSION['username']))
        //redirect('Validation_c2');

        //$order=$this->input->get('id');
        //echo $row=count($this->Auction_Model->sort("auction"));

        $this->load->library('Bootpag');
        $this->bootpag->whereto('Auction/index','auction');
    

        //filtering
        if ($this->input->post('search')) {
            $_SESSION['pos']=$this->input->post();
            unset($_SESSION['pos']['search']);

            foreach ($_SESSION['pos'] as $key=>$value) {
                if ($value) {
                    $data[$key]=$value;
                }

                $auction['data']=$this->Auction_Model->searchn("auction", $data);
            }
        }
        

        if (!($this->input->post('search')) or $this->input->post('showall')) {
            $auction['data']=$this->Auction_Model->sort("auction", $order, 5, $this->uri->segment(3));
        }
    
    
        $this->load->view('Auction/dispauction', $auction);
    }


    public function newauc()
    {
        
        $this->load->view('Auction/insauction');

        if ($this->input->post('save')) {
            $picture['name']=$this->imageUpload();


            $data=array(
                'auction_type'=>$_POST['auctiontype'],
                'auction_detail'=>$_POST['auctiondetail'],
                'auction_address'=>$_POST['auctionaddress'],
                'picture'=>$picture['name'],
                'status'=>$_POST['status'],
                'closing_date'=>$_POST['closingdate'],
            );
            $auction['data']=$this->Auction_Model->adddata($data, 'auction');
        
            
        }
        

   if ($auction) {
          redirect('Auction');
    }
        
    }
    public function updateauc($id)
    {
        
        $array=array("id"=>$id);

        $pos['dat']=$this->Auction_Model->getonedata($array, 'auction');
        if (count($pos['dat'])>0) {
            foreach ($pos['dat'] as $dat) {
                $arr=$dat->id;
                $status=$dat->status;
            }
        }

        if ($status=="Not-Active") {
            $this->session->set_flashdata('alert', 'Whoops  You cant update, This Auction is expired');

            redirect('auction');
        } else {
            $this->load->view('Auction/updauction', $pos);
            $picture['name']=$this->imageUpload();
    

            if ($this->input->post('update')) {
                $data=array(
            'auction_type'=>$_POST['auctiontype'],
            'auction_detail'=>$_POST['auctiondetail'],
            'auction_address'=>$_POST['auctionaddress'],
            'picture'=>$picture['name'],
            'status'=>$_POST['status'],
            'closing_date'=>$_POST['closingdate'],
        );
                $auction['data']=$this->Auction_Model->updatedata($data, $array, 'auction');


                
            }
        }

        if ($auction) {
            redirect('auction');
        }
    }

    public function deleteauc($id)
    {
        $array=array("id"=>$id);
    
        $this->Auction_Model->deletedata($array, 'auction');
      
        redirect('auction');
    }


    public function imageUpload()
    {
        error_reporting(0);

        $config['upload_path'] = 'upload/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']=$_FILES['picture']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('picture')) {
            $uploaddata=$this->upload->data();
            $picture['name']=$uploaddata['file_name'];
        } else {
            $picture['name']='';
        }

        return $picture['name'];
    }
}
