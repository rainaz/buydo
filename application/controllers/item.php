<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('item_model');
		$this->load->model('saleitem_model');
		$this->load->model('biditem_model');
	}
	public function index(){
		$data['title']= 'Home';
		$this->load->view('header_view',$data);
		$this->load->view("saleitem_add_view.php", $data);
		$this->load->view('footer_view',$data);
	}


	public function thank(){
		$data['title']= 'Thank';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php', $data);
		$this->load->view('footer_view',$data);
	}
	public function submitSaleItem(){
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{

			$row = $this->item_model->addItem();
			// find itemID
			// $row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			$this->thank();
		}
	}
}
?>
