<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
	var $header;
	var $footer;
	function __construct(){
		parent::__construct();
		// session_start();
	//	$this->header = get_header_data();
		$this->load->model('user_model');
	}
	
	public function index(){
		// if(isset($_SESSION['person_id'])){
		// 	redirect('/');
		// }
		if($this->session->userdata('user_id')){
			redirect('/');
		}

		$this->load->library('form_validation');
		$this->load->model('user_model');

		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		$data['error'] = '';
		if($this->form_validation->run()){
			$person = $this->user_model->verifyUserExistByEmail($this->input->post('email'), $this->input->post('password'));
			if(!$person){
				$data['error'] = 'E-mail or password is incorrect.';
			}
		}
		$data['return'] = $this->input->get('return');
		$data['header'] = $this->load->view('header', $this->header, TRUE);
		$data['footer'] = $this->load->view('footer', $this->footer, TRUE);
		$this->load->view('auth/index', $data);
	}
	public function signout(){
		$this->session->sess_destroy();
		redirect($this->input->get('return'));
	}
//	public function username_check($check_name){
//		return $this->user_model->check_name($check_name);
//	}
//	public function email_check($check_email){
//		return $this->user_model->check_email($check_email);
//	}
	public function signup(){
		// session_destroy();
		//$this->session->sess_destroy();
		$this->load->model('user_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[3]|max_length[45]|xss_clean|callback_username_check');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password2]|min_length[8]|max_length[45]');
		$this->form_validation->set_rules('password2', 'Password confirmation', 'trim|required');
		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|matches[password2]|min_length[8]|max_length[45]');
		$this->form_validation->set_rules('surname', 'Surname', 'trim|required');	
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');	
		$this->form_validation->set_rules('sent_address', 'Billing address', 'trim');	
		$this->form_validation->set_rules('creditcard', 'Credit card', 'trim');	
		$this->form_validation->set_rules('phone_no', 'Phone number', 'trim|required');	

	//	$this->form_validation->set_message('username_check','Member is already used!');
	//	$this->form_validation->set_message('email_check','Email is already used!');

		$map = array(
			'name' => 'DISPLAY_NAME',
			'password' => 'PASSWORD',
			'birthdate' => 'BIRTHDATE',
			'twitter' => 'TWITTER',
			'facebook' => 'FACEBOOK',
			'email' => 'EMAIL'
			);

		$data['type'] = 'signup';
		$data['header'] = $this->load->view('header', $this->header, TRUE);
		$data['footer'] = $this->load->view('footer', $this->footer, TRUE);
		$this->load->view('auth/signup', $data);
		if(isset($success))
			redirect('/');
	}
		
	
}