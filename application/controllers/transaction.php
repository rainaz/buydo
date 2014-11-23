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
		$data['title']= 'Home';
   		$this->load->view('header_view',$data);
   		//$this->load->view("saleitem_add_view.php", $data);
   		$this->load->view("give_feedback_view.php", $data);
   		$this->load->view('footer_view',$data);
	}	

	public function listAllTransaction($buyerid){
		$this->trans->getTransactionByBuyerID($buyerid);


		//$data[]=
	}

	public function listSendingTransaction($buyerid){
		$query = $this->trans->getTransactionByBuyerIDAndStatus($buyerid, 'sending');
		//$data['']
	}

	public function listReceivedTransaction($buyerid){

	}

	public function notify_delivery() {
		//$this->trans->
	}

	public function feedback(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules();

		if($this->form_validation->run()==FALSE){
			$this->index();
		}
		else {
			$transid  = "";
			$fbfrom = $this->input->post('feedback_from');
			$fbto = $this->input->post('feedback_to');
			$score = $this->input->post('score');
			$comment = $this->input->post('comment');
			$this->feedback->addFeedback($transid, $fbfrom, $fbto, $score, $comment);
		}
	}

	public function complain_seller(){

	}
} ?>