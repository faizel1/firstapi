<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hook extends MY_Controller {

	public function index()
	{
	//	$this->CI=& get_instance();
	$this->load->model('MY_Model');

$this->setwinner();


	}

	public function winner(){

		return $this->db->query("SELECT bidamount,userid,auctionid      
		FROM   bidders b1
		join   auction auc on auc.id=b1.auctionid
		WHERE  bidamount=(SELECT max(bidamount) from bidders as b2
		where  auc.closing_date<=CURRENT_DATE and b1.auctionid=b2.auctionid ) ")->result_array();
		
		}

public function setwinner(){

	$sql=$this->winner();
	$count=count($sql);
	if($count>0){ 
	
	 for($i=0; $i<$count; $i++){
	
		 
		 $array=array("id"=>$sql[$i]['auctionid']);
		 $data=array("status"=>"Not Active","auction_winner"=>$sql[$i]['userid']);
		 $this->MY_Model->updatedata($data,$array,"auction");
	
	}
	
	

}
}
}