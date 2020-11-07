<?php

   

require APPPATH . 'libraries/REST_Controller.php';

     

class Bid extends REST_Controller {



    public function __construct() {

       parent::__construct();

       $this->load->database();

    }

       
//REST_Controller::HTTP_OK

    public function index_get($id = null)
    {
        if(!is_null($id)){

            $data = $this->db->get_where("bidders", ['id' => $id])->row();

        }else{

            $data = $this->db->get("bidders")->result();

        }

     
       $this->response($data, 200);

	}

      

    public function index_post()

    {

        $input = $this->input->post();

        $this->db->insert('bidders',$input);

     

        $this->response(['BID created successfully.'], 200);

    } 



    public function index_put($id)

    {

        $input = $this->put();

        $this->db->update('bidders', $input, array('id'=>$id));

     

        $this->response(['BID updated successfully.'], 200);

    }


    public function index_delete($id)

    {

        $this->db->delete('bidders', array('id'=>$id));

       

        $this->response(['BID deleted successfully.'], 200);

    }

    	

}