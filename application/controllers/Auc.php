<?php

   

require APPPATH . 'libraries/REST_Controller.php';

     

class Auc extends REST_Controller {



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

      

    public function index_post()

    {

        $input = $this->input->post();

        $this->db->insert('auction',$input);

     

        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);

    } 



    public function index_put($id)

    {

        $input = $this->put();

        $this->db->update('auction', $input, array('id'=>$id));

     

        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);

    }


    public function index_delete($id)

    {

        $this->db->delete('auction', array('id'=>$id));

       

        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);

    }

    	

}