<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
pay($transaction_id)
	เปลี่ยนtransaction status เป็น notify
notify($transaction_id)
	เปลี่ยน transation status เป็น received
	ส่ง email ให้ buyer&seller เพื่อให้มาทำการให้ feedback
give_feedback($transaction_id)
	feedback_form
	if(ให้ครบ) change status to done
pay_timeout($transaction_id)
announce_bid_winner($transaction_id)
*/

class Transaction extends CI_Controller{
	public function __construct() {
  		parent::__construct();
  		$this->load->model('user_model');
  		$this->load->model('item_model');
  		$this->load->model('saleitem_model');
  		$this->load->model('biditem_model');
  		$this->load->model('transaction_model');
  		$this->load->model('feedback_model');
  		$this->load->model('seller_model');
  		$this->load->model('buyer_model');
 	}

 	public function loadUserInfoView($data){ 		
   		$this->load->view('header/header',$data);
   		$this->load->view("item/user_info.php",$data);
   		$this->load->view('footer/footer',$data);
 	}

	
	public function index(){
		$data['title']= 'Feedback';
   		$this->load->view('header_view',$data);
   		$this->load->view("transaction_view.php", $data);
   		$this->load->view('footer_view',$data);
	}	

	public function createTransaction(){
		echo "ItemID is ".$this->input->post('itemID');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('itemID', 'itemID', 'trim|required|min_length[1]|xss_clean');

		if($this->form_validation->run()==FALSE){
			$this->load->view('header/header');
			$this->load->view('content/simple_message');
			$this->load->view('footer/footer');
		}
		else {
			$buyerid  = $this->session->userdata('user_id');			
			$itemid = $this->input->post('itemID');
			$quantity = $this->input->post('quantity');
			$transactionstatus = "wait";
			$new_quantity = $this->saleitem_model->soldOut($itemid, $quantity);
			if($new_quantity >= 0){
				$result = $this->transaction_model->addTransaction($buyerid, $itemid, $quantity, $transactionstatus);
				if(!$result){
						echo "Transaction created lorlen\n";
				}
			}
		
			
			$this->load->view('header/header');
			$this->load->view('checkout/buy_complete');
			$this->load->view('footer/footer');
		}
	}
	public function pay(){
		$transaction_id  =$this->input->post('transaction_id');
		$this->transaction_model->setTransactionStatusFromTransactionID($transaction_id,"wait");
		$this->load->view('header/header');
		$this->load->view('checkout/buy_complete');
		$this->load->view('footer/footer');
	}

	
	public function listAllTransaction($buyerid){
		$this->trans->getTransactionByBuyerID($buyerid);


		//$data[]=
	}

	public function listWaitTransaction($buyerid){
		$query = $this->transaction_model->getTransactionByBuyerIDAndStatus($buyerid, 'wait');
		//$data['']
	}

	public function listReceivedTransaction($buyerid){
		$query = $this->transaction_model->getTransactionByBuyerIDAndStatus($buyerid, 'received');
	}

	public function notify_delivery() {
		//go to change status in database		
		//$transid = 111;
		//echo "Pass method head\n";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('transid', 'transid', 'trim|required|min_length[1]|xss_clean');
		
	//	if($this->form_validation->run()==TRUE){
	//		$this->index();
		//}
	//	else {
		//	echo "Pass here\n";
			$transid = $this->input->post('transaction_id');
			$transtatus = "received";
			$this->transaction_model->setTransactionStatusFromTransactionID($transid, $transtatus);		

			$buyerEmail = $this->transaction_model->getBuyerEmailFromTransactionID($transid);
			$sellerEmail = $this->transaction_model->getSellerEmailFromTransactionID($transid);


			$this->load->library("email_library");

			$this->email_library->sendEmail($buyerEmail,"Item Delivered !!!!", "Please give feedback to '$this->transaction_model->getItemFromTransactionID($transid)' ownner.");
			$this->email_library->sendEmail($sellerEmail,"Item Delivered !!!!", "Please give feedback to '$this->transaction_model->getItemFromTransactionID($transid)' buyer");

			$this->index();	
		}


	}

	public function showUserFeedback(){		
		$userid = $this->input->get('user_id');
		if($userid=="") $userid = $this->session->userdata('user_id');
		//if($userid=="") $userid = 6;

		//$userid = 6;
		$feedback = $this->feedback_model->getFeedbackByFeedbackReceiverUserID($userid);
		//$data['username'] = $this->user_model->getNameByUserID($userid);
		//var_dump($feedbacks);	
		$name_of_user = $this->user_model->getNameByUserID($userid);
		$usertype = "";
		if($this->buyer_model->verifyBuyerByUserID($userid)){
			$usertype = "Buyer";
		}
		else if($this->seller_model->verifySellerByUserID($userid)){
			$usertype = "Seller";
		}

		
		$data = array();
		$predata = array();
		$size = 0;
		foreach($feedback as $row){
			$narray = array(
				array(
					"score"=>$row['score'],
					"giver_name"=> $this->user_model->getNameByUserID($row['feedback_from']),
					"placement_date"=>"",
					"comment"=>$row['comment']
				)
			);
			$predata = array_merge($predata, $narray);
			$size = $size + 1;
		}
		//$data['title'] = "View Feedback";
		$data = array_merge(array("sendarray"=>$predata), array("size"=>$size), array("user_type"=>$usertype), array("name_of_user"=>$name_of_user));

		// var_dump($data);
		$this->loadUserInfoView($data);

	}

	public function getBidHistoryByUserID($userid){
		$this->load->model('bid_model');
		$biddingItem = $this->bid_model->getBidItemIDByUserID($userid);
		//var_dump($biddingItem);
		$historyArray = array();
		foreach($biddingItem as $row){
			//echo "$row";
			$itemID = intval($row['item_id']);
			//var_dump($row);
			$itemName = $this->item_model->getItemNameByItemID($itemID);
			$currentItemPrice = $this->biditem_model->getCurrentPrice($itemID);			
			$endDate = $this->biditem_model->getEndDate($itemID);
			$currentMaxBid = $this->biditem_model->getCurrentMaxBid($itemID);
			$currentWinnerID = $this->biditem_model->getCurrentWinnerID($itemID);
			$myCurrentBid = $this->bid_model->getMyCurrentBid($userid, $itemID);
			$itemStatus = $this->item_model->getItemStatusByItemID($itemID);
			$mergeArray = array(
				array(
					'item_name' => $itemName,
					'currentItemPrice' => $currentItemPrice,
					'end_date' => $endDate,
					'currentMaxBid' => $currentMaxBid,
					'currentWinnerID' => $currentWinnerID,
					'myCurrentBid' => $myCurrentBid,
					'itemStatus' => $itemStatus
					)
				);
			//var_dump($mergeArray);
			$historyArray = array_merge($historyArray, $mergeArray);
		}

		//var_dump($historyArray);

		$this->index();

		return $historyArray;
	}

	public function give_feedback($transaction_id, $feedback_from, $feedback_to) {
		$data['transaction_id'] = $transaction_id;
		$data['feedback_from'] = $feedback_from;
		$data['feedback_to'] = $feedback_to;
		$this->load->view('header/header');
	    $this->load->view('user/feedback',$data);
	    $this->load->view('footer/footer');
	}


	public function feedback(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('transid', 'transid', 'trim|required|min_length[1]|xss_clean');

		if($this->form_validation->run()==FALSE){
			$data['type']="alert";
			$data['message']="Error.";
			$this->load->view('header/header');
	    	$this->load->view('content/simple_message', $data);
	   		$this->load->view('footer/footer');

		}
		else {
			$transid  = $this->input->post('transid');
			$fbfrom = $this->input->post('feedback_from');
			$fbto = $this->input->post('feedback_to');
			$score = $this->input->post('score');
			$comment = $this->input->post('comment');
			$this->feedback_model->addFeedback($transid, $fbfrom, $fbto, $score, $comment);
			//echo "comment = $comment\n";
			//echo "Feedback received\n";
			//$this->index();
			$data['type']="success";
			$data['message']="Feedback received.";
			$this->load->view('header/header');
	    	$this->load->view('content/simple_message', $data);
	   		$this->load->view('footer/footer');

		}
	}

	public function complain_seller(){

	}
} ?>
