<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('complain_model');
		$this->load->model('item_model');
	}
	public function index(){
        $data['template_type'] = "ecommerce";
        $this->load->view('header/header', $data);
     //   $this->load->view('view_history.php');
        $this->load->view('page/home');
        $this->load->view('footer/footer');
	}

	public function login(){
        $data['template_type'] = "corperate";
        $this->load->view('header/header', $data);
        $this->load->view('user/login');
        $this->load->view('footer/footer');
	}
	public function systemComplain()
	{
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
		else      
			echo "ERROR: No username or password";
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
			echo "Thank you for registration";
			echo '<br />COMPLETE';
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
	
	public function viewBidHistory(){
		$data['title']= 'bidHistory';

		$data['user_id'] = $this->input->post('user_id');

		$bidHistory = $this->item_model->getItemInfo(1);

		$this->load->view('header_view');
		$this->load->view('thank_view.php', $bidHistory);
		$this->load->view('footer_view');

	}
	public function thank(){
		$data['title']= 'Thank';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php', $data);
		$this->load->view('footer_view',$data);
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
}
?>
