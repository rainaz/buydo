<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction extends CI_Controller{
	public function __construct() {
  		parent::__construct();
  		$this->load->model('item_model','item');
  		$this->load->model('saleitem_model','saleitem');
  		$this->load->model('biditem_model','biditem');
  		$this->load->model('transaction_model',"trans");
  		$this->load->model('feedback_model',"feedback");
 	}

	
	public function index(){
		$data['title']= 'Feedback';
   		$this->load->view('header_view',$data);
   		$this->load->view("transaction_view.php", $data);
   		$this->load->view('footer_view',$data);
	}	

	public function createTransaction(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('itemid', 'transid', 'trim|required|min_length[1]|xss_clean');

		if($this->form_validation->run()==FALSE){
			$this->index();
		}
		else {
			$buyerid  = $this->input->post('buyer_id');
			$sellerid = $this->input->post('seller_id');
			$itemid = $this->input->post('item_id');
			$quantity = $this->input->post('quantity');
			$transactionstatus = "wait";
			$this->feedback->addFeedback($buyerid, $sellerid, $itemid, $quantity, $transactionstatus);
			//echo "Pass here\n";
		}
	}

	public function listAllTransaction($buyerid){
		$this->trans->getTransactionByBuyerID($buyerid);


		//$data[]=
	}

	public function listWaitTransaction($buyerid){
		$query = $this->trans->getTransactionByBuyerIDAndStatus($buyerid, 'wait');
		//$data['']
	}

	public function listReceivedTransaction($buyerid){
		$query = $this->trans->getTransactionByBuyerIDAndStatus($buyerid, 'received');
	}

	public function notify_delivery() {
		//go to change status in database		

		$this->load->('form_validation');
		$this->form_validation->set_rules('transid', 'transid', 'trim|required|min_length[1]|xss_clean');
		
		if($this->form_validation->run()==FALSE){
			$this->index();
		}
		else {
			$transid = $this->input->post('transid');
			$transtatus = "received";
			$this->trans->setTransactionStatusFromTransactionID($transid, $transtatus);			
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
			$this->feedback->addFeedback($transid, $fbfrom, $fbto, $score, $comment);
			//echo "Pass here\n";
		}
	}

	public function complain_seller(){

	}
} ?>