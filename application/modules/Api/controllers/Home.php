<?php

   

require APPPATH . 'libraries/REST_Controller.php';

     

class Home extends REST_Controller {



    public function __construct() {

       parent::__construct();

       $this->load->database();

    }

       


    public function index_get($id = null)
    {
        if(!is_null($id)){

            $data = $this->db->get_where("auction", ['id' => $id])->row();

        }else{

            $data = $this->db->get("auction")->result();

        }

     
       $this->response($data, REST_Controller::HTTP_OK);

	}

      



}