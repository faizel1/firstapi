<?php

   

require APPPATH . 'libraries/REST_Controller.php';

     

class Auction extends REST_Controller {



    public function __construct() {

       parent::__construct();

       $this->load->model('ApiModel');

    }

       


    public function index_get($id = null)
    {
        if(!is_null($id)){

            $data = $this->ApiModel->getonedata(['id' => $id],'auction');
            

        }else{

            $data = $this->ApiModel->getdata("auction");

        }

     
       $this->response($data, 200);

	}

      

    public function index_post()

    {

        $input = $this->post();

        $this->ApiModel->adddata('auction',$input);

     

        $this->response(['Auction created successfully.'], 200);

    } 



    public function index_put($id)

    {

        $input = $this->put();

        $this->ApiModel->updatedata($input, array('id'=>$id),'auction');

     

        $this->response(['Auction updated successfully.'], 200);

    }


    public function index_delete($id)

    {

        $this->ApiModel->delete( array('id'=>$id,'auction'));

       

        $this->response(['Auction deleted successfully.'],200);

    }

    	

}