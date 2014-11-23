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
	//	$this->load->view("saleitem_add_view.php", $data);
		$this->load->view("biditem_add_view.php", $data);
		$this->load->view('footer_view',$data);
	}

	public function loadAddSaleItemView() {
		$this->load->view('header_view', $data);
		$this->load->view('seller/add_saleitem', $data);
		$this->load->view('footer_view', $data);	
	}

	public function submitSaleItem_() {
		$data['item_name'] = $this->input->post('item_name');
		$data['picture'] = $this->input->post('picture');
		$data['price'] = $this->input->post('price');
		$data['quantity'] = $this->input->post('quantity');
		$data['spec'] = $this->input->post('spec');
		$data['payment_method'] = $this->input->post('payment_method');
		$data['agreement'] = $this->input->post('agreement');
		$this->load->view('header/header', $data);
		$this->load->view('seller/edit_saleitem', $data);
		$this->load->view('footer/footer', $data);
	}

	public function thank(){
		$data['title']= 'Thank';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view.php', $data);
		$this->load->view('footer_view',$data);
	}
  
	public function showItem($id){
		$this->load->model('item_model');
		$data = $this->item_model->getItemInfo($id);
		$data['template_type'] = "ecommerce";
		$this->load->view('header/header',$data);
		if($data['type'] == "Sales")
			$this->load->view('item/buy_item_info', $data);
		else
			$this->load->view('item/bid_item_info', $data);
		$this->load->view('footer/footer',$data);


		
	}



	public function submitSaleItem() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$row = $this->item_model->addItem();
			$price = $this->input->post('price');
			$qis = $this->input->post('quantity_in_stock');
			$this->saleitem_model->addSaleItemm($row, $price, $qis);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			$this->thank();  
		}

	}

		public function editSaleItem() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$row = $this->item_model->editItem();
			$item_id = $this->input->post('item_id');
			$price = $this->input->post('price');
			$qis = $this->input->post('quantity_in_stock');
			$this->saleitem_model->editSaleItem($price, $qis);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			$this->thank();  
		}

	}

	public function submitBidItem() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$row = $this->item_model->addItem();
			$initial_price = $this->input->post('initial_price');
			$current_price = $this->input->post('initial_price');
			$current_max_bid = $this->input->post('initial_price');
			$end_date = $this->input->post('end_date');
			$this->biditem_model->addBidItem($row, $initial_price, $end_date);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			$this->thank();  
		}

	}

	public function editBidItem() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$row = $this->item_model->editItem();
			$item_id = $this->input->post('item_id');
			$initial_price = $this->input->post('initprice');
			$end_date = $this->input->post('end_date');
			$this->biditem_model->editBidItem($item_id,$initial_price, $end_date);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			$this->thank();  
		}

	}
	public function searchItem($search){
		$this->load->model("item_model");
		$list = $this->item_model->searchItem($search);
		if(!$list)
			$data['isFound'] = FALSE;
		else 
			$data['isFound'] = TRUE;
		$data['data'] = $list;
		$data['template_type'] = "ecommerce";
		$this->load->view('header/header',$data);
		$this->load->view('item/search_result', $data);
		$this->load->view('footer/footer',$data);
	}

} ?>
