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
  		$this->load->model('item_model');
  		$this->load->model('saleitem_model');
  		$this->load->model('biditem_model');
  		$this->load->model('transaction_model');
  		$this->load->model('feedback_model');
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
			$result = $this->transaction_model->addTransaction($buyerid, $itemid, $quantity, $transactionstatus);
			if(!$result){
					echo "Transaction created lorlen\n";
			}
		
			
			$this->load->view('header/header');
			$this->load->view('checkout/buy_complete');
			$this->load->view('footer/footer');
		}
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
		
		if($this->form_validation->run()==TRUE){
			$this->index();
		}
		else {
			echo "Pass here\n";
			$transid = $this->input->post('transid');
			$transtatus = "received";
			$this->transaction_model->setTransactionStatusFromTransactionID($transid, $transtatus);		
			$this->index();	
		}

	}

	public function feedback(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('transid', 'transid', 'trim|required|min_length[1]|xss_clean');

		if($this->form_validation->run()==FALSE){
			$this->index();
		}
		else {
			$transid  = $this->input->post('transid');
			$fbfrom = $this->input->post('feedback_from');
			$fbto = $this->input->post('feedback_to');
			$score = $this->input->post('score');
			$comment = $this->input->post('comment');
			$this->feedback_model->addFeedback($transid, $fbfrom, $fbto, $score, $comment);
			//echo "comment = $comment\n";
			echo "Feedback received\n";
			$this->index();
		}
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

	public function complain_seller(){

	}
} ?>