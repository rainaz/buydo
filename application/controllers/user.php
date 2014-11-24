<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('complain_model');
	}
	public function index(){
        $data['template_type'] = "ecommerce";
        $this->load->view('header/header', $data);
        $this->load->view('page/home');
        $this->load->view('footer/footer');
	}

	public function login(){
        $data['template_type'] = "corperate";
        $this->load->view('header/header', $data);
        $this->load->view('user/login');
        $this->load->view('footer/footer');
	}

	public function register(){
        $data['template_type'] = "corperate";
        $this->load->view('header/header', $data);
        $this->load->view('user/register');
        $this->load->view('footer/footer');
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
	
	public function manageprofile(){
		$this->load->library('form_validation');
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
        $data['template_type'] = "corperate";
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
		$data['template_type'] = "corperate";
		$data['hash'] = $hash;
		$data['warning'] = FALSE;
        $this->load->view('header/header', $data);
        $this->load->view('user/new_password_form', $data);
        $this->load->view('footer/footer');
			
	}
	public function changePasswordPageAgain($hash){
		$data['template_type'] = "corperate";
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
