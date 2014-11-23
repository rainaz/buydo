<?php
class InternalModelTester extends CI_Controller {

	// Access this controller from http://localhost/buydo/index.php/vc/
	public function index($page)
	{
		$this->load->view('sample_view/main.html');
	}

	// Access this function from http://localhost/buydo/index.php/vc/show/<$folder>/<$page>
	// i.e. http://localhost/buydo/index.php/vc/show/content/sample
	

	public function show($folder, $page)
	{
		if($folder=='user'||$folder=='seller') $data['template_type'] = "corperate";
		else $data['template_type'] = "ecommerce";
		$this->load->view('header/header', $data);
		$this->load->view($folder.'/'.$page);
		$this->load->view('footer/footer');
		$this->load->model('admin_model');
		//echo "hello world";
		//$this->admin_model->addAdmin(5);
      // $data['page_title'] = $page;
      // $this->load->view('header');
      // echo $page;
      // //$this->load->view('content', $data);
      // $this->load->view('footer');
	}

	//user_model

	public function testAddUser(){
		$this->load->model("user_model",'user');
		$this->user->addUser("noppa", "sriwa", "noppayut@hotmail.com", NULL, "05-01-1993", 
			NULL, "my home", "noppayut001", "passwordmep", "0816555002", "-", "-", "-", "-",0);

			
	}

	public function testVerifyUserExistByEmail(){
		$this->load->model("user_model",'user');
		$query = $this->user->testVerifyUserExistByEmail("noppayut@hotmail.com");
		if($query >0 ) return "user exist";
		else return "user doesn't exist"
	}

	public function testGetUserIDByEmail(){
		$this->load->model("user_model",'user');
		$query = $this->user->getUserIDByEmail("noppayut@hotmail.com");
		if($query > 0) {
			echo "$query";
			return true;
		}
		return false;
	}

	public function testGetUserByUserID(){
		$this->load->model("user_model",'user');
		$query = $this->user->getUserByUserID(100);
		if($query->num_rows() > 0){
			echo $query->row();
			return true;
		}
		return false;
	}

	public function testSetName(){
		$this->load->model("user_model",'user');
		$randomuser = $this->user->getUserByUserID(100);
		$randomname = $randomuser->name;
		$query = $this->user->setNameByUserID(100, "new name eiei");
		$randomuser2 = $this->user->getUserByUserID(100);
		$randomname2 = $randomuser2->name;
		if($randomname2 == $randomname1) {
			echo "$randomename1 and $randomanme2\n"
			return false;
		}
		return true;
	}

	public function testSetSurname(){
		$this->load->model("user_model",'user');
		$randomuser = $this->user->getUserByUserID(100);
		$randomname = $randomuser->surname;
		$query = $this->user->setSurnameByUserID(100, "new surname eiei");
		$randomuser2 = $this->user->getUserByUserID(100);
		$randomname2 = $randomuser2->name;
		if($randomname2 == $randomname1) {
			echo "$randomename1 and $randomanme2\n"
			return false;
		}
		return true;
	}

	public function testManagaeProfileByUserID(){
		$this->load->model("user_model",'user');
		$randomuser = $this->user->manageProfileByUserID(100, "newname", "newsurname", "newsentAddress",
			"newaddress", "newcountry", "newemail@email.com", "0811111111", "newpassword");
		
	}

	//item_model
	public function testAddItem(){
		
	}

	public function testGetItemByID(){

	}

	//bid_model
	public function testAddBid(){

	}

	public function testGetBidByBidID(){

	}

	public function testGetBidByBuyerID(){

	}

	public function testGetBidByItemID(){

	}

	public function testSetCurrentBid(){

	}

	public function testSetMaxbid(){

	}

	//biditem_model

	public function testAddBidItem(){

	} 

	public function testGetBidItemByItemID(){

	}

	public  function testGetBidItemBySellerID(){

	}

	//buy_model

	public function testAddBuy(){

	}

	public function testGetBuyByBuyID(){

	}

	public function testGetBuyByBuyerID(){

	}

	//buyer_model

	public function testAddBuyer(){

	}

	public function testGetBuyerByUserID(){

	}

	//complain_model

	public function testAddComplain(){

	}

	public function testGetComplainByID(){

	}

	public function testSentComplain(){

	}

	//saleitem_model

	public function testAddSaleItem(){

	}

	public function testGetSaleItemByItemID(){

	}

	public function testGetSaleItemBySellerID(){

	}

	//transaction_model

	public function testAddTransaction(){

	}

	public function testGetBuyerIDFromTransactionID(){

	}

	public function tetsGetSellerIDFromTransactionID(){

	}

	public function testGetItemIDFromTransactionID(){

	}

	public function testGetTransactionStatusFromTransactionID(){

	}

	public function testGetPlacementDateFromTransactionID(){

	}

	public function testSetTransactionStatusFromTransactionID(){
		
	}


}
?>
