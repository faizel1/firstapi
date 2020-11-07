<?php

   

require APPPATH . 'libraries/REST_Controller.php';

     

class Bid extends REST_Controller {



    public function __construct() {

       parent::__construct();

       $this->load->model('ApiModel');

    }

       


    public function index_get($id = null)
    {
        if(!is_null($id)){

            $data = $this->ApiModel->getonedata(['id' => $id],'bidders');
            

        }else{

            $data = $this->ApiModel->getdata("bidders");

        }

     
       $this->response($data, 200);

	}

      

    public function index_post()

    {

        $input = $this->post();

        $this->ApiModel->adddata('bidders',$input);

     

        $this->response(['Bid created successfully.'], 200);

    } 



    public function index_put($id)

    {

        $input = $this->put();

        $this->ApiModel->updatedata($input, array('id'=>$id),'bidders');

     

        $this->response(['Bid updated successfully.'], 200);

    }


    public function index_delete($id)

    {

        $this->ApiModel->delete( array('id'=>$id,'bidders'));

       

        $this->response(['Bid deleted successfully.'],200);

    }

    	

}