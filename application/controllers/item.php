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
		$this->load->view("bidItem_mock.php", $data);


		$this->load->view('footer_view',$data);
	}


	public function verifyIsLoggedIn(){
		if(!$this->session->userdata('logged_in')){
			$this->index();
		}
	}

	public function loadAddSaleItemView() {
		$data['title']= 'Add SaleItem';
		$this->load->view('header_view');
		$this->load->view('seller/add_saleitem');
		$this->load->view('footer_view');	
	}

	public function loadAddBidItemView() {
		$data['title']= 'Add BidItem';
		$this->load->view('header/header');
		$this->load->view('seller/add_biditem');
		$this->load->view('footer/footer');
	}

	public function loadEditBidItemView() {
		$data['title']= 'Edit BidItem';
		$this->load->view('header/header');
		$this->load->view('seller/edit_biditem');
		$this->load->view('footer/footer');
	}

	public function loadEditSaleItemView() {
		$data['title']= 'Edit SaleItem';
		$this->load->view('header/header');
		$this->load->view('seller/edit_saleitem');
		$this->load->view('footer/footer');
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



	// public function submitSaleItem() {
	// 	$this->load->library('form_validation');
	// 	// field name, error message, validation rules
	// 	$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
	// 	//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
	// 	//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
	// 	//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->index();
	// 	}
	// 	else {
	// 		$row = $this->item_model->addItem();
	// 		$price = $this->input->post('price');
	// 		$qis = $this->input->post('quantity_in_stock');
	// 		$this->saleitem_model->addSaleItemm($row, $price, $qis);

	// 		//find itemID
	// 		//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

	// 		$this->thank();  
	// 	}

	// }

	public function submitSaleItem() {
		$this->verifyIsLoggedIn();

		$data['item_name'] = $this->input->post('item_name');
		$data['picture'] = $this->input->post('picture');
		$data['price'] = $this->input->post('price');
		$data['quantity'] = $this->input->post('quantity');
		$data['spec'] = $this->input->post('spec');
		$data['payment_method'] = $this->input->post('payment_method');
		$data['agreement'] = $this->input->post('agreement');
		$data['status'] = "in_stock";
		$data['owner_id'] = $this->session->userdata('user_id');

		$row = $this->item_model->addItem_($data['item_name'],$data['agreement'],
				$data['status'],$data['spec'], $data['owner_id'],$data['picture']);
		$success = $this->saleitem_model->addSaleItemm($row, $this->input->post('price'), $this->input->post('quantity'));

		if ( $success ) {
			$this->load->view('header_view', $data);
			// TODO: replace this echo with the page
			echo "Success!";
			$this->load->view('footer_view', $data);
		} else {
			$this->load->view('header_view', $data);
			// TODO: error message for add sale item
			echo "There are some error here. Don't worry, it's not your fault. We'll try to fix it asap. Please try again later...";
			$this->load->view('footer_view', $data);
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
			$qis = $this->input->post('quantity');
			$this->saleitem_model->editSaleItem($price, $qis);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			$this->thank();  
		}

	}



	public function submitBidItem() {
		//$this->verifyIsLoggedIn();
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
 			$data=array(
    		'item_name'=>$this->input->post('item_name'),   
    		'agreement'=>$this->input->post('agreement'),  
    		'status' => "in_stock",
    		'spec'=>$this->input->post('spec'),   
    		'picture'=>$this->input->post('picture'), 
   		 	'owner_id'=>$this->session->userdata('user_id')
  			);

			$row = $this->item_model->addItem_($data['item_name'],$data['agreement'],
				$data['status'],$data['spec'], $data['owner_id'],$data['picture']);
			//echo "$row\n";
			$initial_price = $this->input->post('initial_price');
			$current_price = $this->input->post('initial_price');
			$current_max_bid = $this->input->post('initial_price');
			$end_date = $this->input->post('end_date');
			$query = $this->biditem_model->addBidItem($row, $initial_price, $end_date);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);

			//$this->thank();  
			if($query > 0 ){
				//echo "completed\n";
				//$this->index();	
				$this->loadAddBidItemView();
			}
			
			
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
	public function searchItem($search, $page){
		$this->load->model("item_model");
		$list = $this->item_model->searchItem($search, $page);
		if(!$list)
			$data['isFound'] = FALSE;
		else 
			$data['isFound'] = TRUE;
		/*
		 *In $list there are two value total and data where total contain num of all search item and data contain all item in page
		 *
		 */
		$data['data'] = $list['data'];
		$data['search'] = $search;
		$data['template_type'] = "ecommerce";
		$this->load->view('header/header',$data);
		$this->load->view('item/search_result', $data);
		$this->load->view('footer/footer',$data);
	}

		public function viewBidItemByID() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		//	$this->index();

			$item_id = $this->input->post('item_id');
			$itemInfo = $this->item_model->getItemInfo($item_id);
			$bidItemInfo = $this->biditem_model->getBidItemByItemID($item_id);
			$data =  array_merge($itemInfo, $bidItemInfo);

			//find itemID
			//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);


		$this->load->view('header_view');
		$this->load->view('biditem_mock.php', $data);
		$this->load->view('footer_view');
	}
	public function calculateBid() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('item_name', 'Item Name', 'trim|required|min_length[4]|xss_clean');
		//  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		//	$this->index();
		//find itemID
		//$row = $this->item_model->addSaleItem(maybe we need a paramenter here);
		$data = array(
				"item_id"=>$this->input->post('item_id'),
				"value" => $this->input->post('value'),
				"itemName" => $this->input->post('itemName'),
				"initial_price" => $this->input->post('initial_price'),
				"current_winner_id" => $this->input->post('current_winner_id'),
				"current_price" => $this->input->post('current_price')		,
				"current_max_bid" => $this->input->post('current_max_bid'),
				"end_date" => $this->input->post('end_date')
			);

		$user_id = $this->session->userdata('user_id');
		$item_id = $data['item_id'];
		if($data['value']){
			$nmaxbidprice = $data['value'];
			echo $nmaxbidprice;
		}
		else{
		  if(strlen($data['current_max_bid'])==0){
		   	$nmaxbidprice = $data['initial_price'];
	 	   	echo 'maxbidnull';
		   }
		   else{
		   	$nmaxbidprice = $data['current_price']+$data['initial_price']*0.05;
		   	echo 'maxbidnotnull';
		   }
		   echo $nmaxbidprice;
		}

		$currentMaxBid = $this->biditem_model->getCurrentMaxBid($item_id);
		$currentWinnerID = $this->biditem_model->getCurrentWinnerID($item_id);
		$currentPrice = $this->biditem_model->getCurrentPrice($item_id);
		$initialPrice = $this->biditem_model->getInitialPrice($item_id);

		if(strlen($data['current_max_bid'])==0){
			$this->biditem_model->setCurrentPrice($item_id, $initialPrice);
			$this->biditem_model->setCurrentWinnerID($item_id, $user_id);
			$this->biditem_model->setCurrentMaxBid($item_id, $nmaxbidprice);
		}
		else if($nmaxbidprice > $currentMaxBid){
			$this->biditem_model->setCurrentPrice($item_id, $currentMaxBid + $initialPrice*0.05);
			$this->biditem_model->setCurrentWinnerID($item_id, $user_id);
			$this->biditem_model->setCurrentMaxBid($item_id, $nmaxbidprice);
		}
		else {
			$this->biditem_model->setCurrentPrice($item_id, $nmaxbidprice);
			$nmaxbidprice = $minPrice;
		}

		$this->bid->addBid($item_id, $user_id, $nmaxbidprice, $this->biditem_model->getCurrentMaxBid($item_id));

		$this->load->view('header_view');
		$this->load->view('test_view.php', $data);
		$this->load->view('footer_view');
	}
} ?>
