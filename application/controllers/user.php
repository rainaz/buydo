<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('complain_model');
		$this->load->model('item_model');
		$this->load->model('transaction_model');
		$this->load->model('biditem_model');
		$this->load->model('saleitem_model');
	}
	public function index(){
        $data['template_type'] = "ecommerce";
        $this->load->view('header/header', $data);
        $this->load->view('page/home');
        $this->load->view('footer/footer');
	}

	public function login(){
        $data['template_type'] = "corporate";
        $this->load->view('header/header', $data);
        $this->load->view('user/login');
        $this->load->view('footer/footer');
	}

	public function register(){
        $data['template_type'] = "corporate";
        $this->load->view('header/header', $data);
        $this->load->view('user/register');
        $this->load->view('footer/footer');
	}
	public function systemComplain()
	{
        $data['template_type'] = "corporate";
        $this->load->view('header/header', $data);
        $this->load->view('user/system_complain');
        $this->load->view('footer/footer');
	}

	public function myAccount() {
		$data['template_type'] = "corporate";
        $this->load->view('header/header', $data);
        $this->load->view('user/my_account');
        $this->load->view('footer/footer');
	}

	public function submit_system_complain(){
		$topic=$this->input->post('topic');
		$detail=($this->input->post('detail'));
		$result=$this->complain_model->add_complain();
		if($result) {
			$data['message']="SUCCESS: your complaint has been processed.";
	        $data['type']="success";
	        $this->load->view('header/header');
	        $this->load->view('content/simple_message',$data);
	        $this->load->view('footer/footer');
		}
		else {
			$data['message']="ERROR: cannot submit complain";
	        $this->load->view('header/header');
	        $this->load->view('content/simple_message',$data);
	        $this->load->view('footer/footer');
	    }
	}

	public function submit_login(){
		$username=$this->input->post('username');
		$password=sha1($this->input->post('password'));
		$result=$this->user_model->login($username,$password);
		if($result)
			$this->index();
		else{
			$data['message']="ERROR: No username or password";
	        $this->load->view('header/header');
	        $this->load->view('content/simple_message',$data);
	        $this->load->view('footer/footer');
		}

	}
	//

	public function submit_register(){
		//$this->load->library('form_validation');
		// field name, error message, validation rules
		//$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		//if($this->form_validation->run() == FALSE){
		//	$this->index();
		//}
		//else{
			$this->user_model->add_user();
			$this->load->library('email_library');
			$destinationAddress = $this->input->post('email');
			$subject = "Registration confirmation: Buydo :)";
			$message = "Thank you for registration, ".$this->input->post('name').'. Your username is '.$this->input->post('username').'.';
			$this->email_library->sendEmail($destinationAddress,$subject,$message);
			$data['type']="success";
			$data['message']="Registration success";
	        $this->load->view('header/header');
	        $this->load->view('content/simple_message',$data);
	        $this->load->view('footer/footer');
		//}
	}

	public function addComplain(){
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('detail', 'Detail', 'required');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->complain_model->add_complain();
			$this->thank();
		}
	}
	
	public function addComplainUser(){
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('detail', 'Detail', 'required');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->complain_model->add_complain_user();
			$this->thank();
		}
	}
	
	public function showManageProfilePage() {
		$data = $this->user_model->getUserByUserID($this->session->userdata('user_id'));

		$this->load->view('header/header');
	    $this->load->view('user/manage_my_profile',$data);
	    $this->load->view('footer/footer');
	}

	public function transaction_history( ) {
		//$data = $this->user_model->getUserByUserID($this->session->userdata('user_id'));
		$data = $this->transaction_model->getTransactionByBuyerID($this->session->userdata('user_id'));
		
		$theArrayToPass = array();
		foreach ( $data as $aTransaction ){
			$anItem = $this->item_model->getItemByID( $aTransaction['item_id'] );

			$image_link = $anItem->picture;
			$title = $anItem->item_name;
			$seller = $this->user_model->getUserByUserID( $anItem->owner_id )->username;
			$price = ""; 
			if ( $this->biditem_model->verifyBidItemByID($anItem->item_id) ) { // is bid item
				$price = $this->biditem_model->getCurrentPrice($anItem->item_id);
			} else { // is sale item
				
				$price = $this->saleitem_model->getSaleItemByItemID($anItem->item_id)->first_row()->price;
			}
			$placement_date = $aTransaction['placement_date'];
			$status = $aTransaction['transaction_status'];
			
			$anArrayElement = array(
				'image_link' => $image_link,
				'title' => $title,
				'seller' => $seller,
				'price' => $price,
				'placement_date' => $placement_date,
				'status' => $status
				);
			$arrayElement2 = array($anArrayElement);
			var_dump($anArrayElement);
			echo "<br />";
			$theArrayToPass = array_merge ( $theArrayToPass , $arrayElement2 );

		}
		var_dump($theArrayToPass);
		echo "<br />";
		$data = array ( 'theArrayToPass' => $theArrayToPass );
		var_dump($data);
		echo "<br />";
		$data2 = array(
			'template_type' =>"corporate"
		);
		$this->load->view('header/header', $data2);
	    $this->load->view('item/transaction_history',$data);
	    $this->load->view('footer/footer');
	}

	public function manageprofile(){
/*		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->user_model->manageProfile();
			$this->thank();
		}

		*/
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'User Name');

		if($this->form_validation->run() == FALSE){
			$data['type']="danger";
			$data['message']="Error! Please try again later";
			$this->load->view('header/header');
	    	$this->load->view('content/simple_message', $data);
	   		$this->load->view('footer/footer');
		}
		else{
			$result = $this->user_model->manageProfile();
			if($result){
			$data['type']="success";
			$data['message']="Edit profile complete";
			$this->load->view('header/header');
	    	$this->load->view('content/simple_message', $data);
	    	$this->load->view('footer/footer');
			}
			else{
			$data['type']="danger";
			$data['message']="Error! Please try again later";
			$this->load->view('header/header');
	    	$this->load->view('content/simple_message', $data);
	   		$this->load->view('footer/footer');
			}

		}
	}

public function viewBidHistory(){
		$data['title']= 'bidHistory';

		$data['user_id'] = $this->input->post('user_id');

		$bidHistory = $this->item_model->getItemInfo(1);

		$this->load->view('header_view');
		$this->load->view('thank_view.php', $bidHistory);
		$this->load->view('footer_view');

	}



	public function logout(){
		$newdata = array(
			'user_id'   =>'',
			'user_name'  =>'',
			'user_email'     => '',
			'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
	public function askingRecover(){
        $data['template_type'] = "corporate";
        $this->load->view('header/header', $data);
        $this->load->view('user/recovery_password');
        $this->load->view('footer/footer');
	}
	public function recoverPassword(){
	
		$this->load->model("user_model");
		$data = $this->user_model->findUserByEmail($this->input->post('email'));
		if(!$data)
			redirect("/");
		$this->load->library("email_library");
		
		$this->email_library->sendEmail("rs715714@gmail.com", "Change password",$data['email'].": Proceed to change password at   http://127.0.0.1/buydo/index.php/user/changePasswordPage/".$data['hash']);
		redirect("/");
	}
	public function changePasswordPage($hash){
		$data['template_type'] = "corporate";
		$data['hash'] = $hash;
		$data['warning'] = FALSE;
        $this->load->view('header/header', $data);
        $this->load->view('user/new_password_form', $data);
        $this->load->view('footer/footer');
			
	}
	public function changePasswordPageAgain($hash){
		$data['template_type'] = "corporate";
		$data['hash'] = $hash;
		$data['warning'] =TRUE;
        $this->load->view('header/header', $data);
        $this->load->view('user/new_password_form', $data);
        $this->load->view('footer/footer');
			
	}
	public function changePassword($hash){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');
		//if($this->form_validation->run() == FALSE){
		if($this->input->post("password") != $this->input->post("confirm_password")){
			// Warning password not match
			redirect("/user/changePasswordPageAgain/".$hash);
		}
		else{
			$this->load->model("user_model");
			$tmp = $this->user_model->changePassword($hash, $this->input->post("password"));
			redirect("/");
		}
	}
}
?>
