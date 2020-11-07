<?php

   

require APPPATH . 'libraries/REST_Controller.php';

     

class Home extends REST_Controller {



    public function __construct() {

       parent::__construct();

       $this->load->model('ApiModel');

    }

       


    public function index_get($id = null)
    {
        if(!is_null($id)){

            $data = $this->ApiModel->getonedata( ['id' => $id],'auction')->row();

        }else{

            $data = $this->ApiModel->getdata("auction");

        }

     
       $this->response($data,200);

	}

      



}