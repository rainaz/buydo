<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidItem_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "item_id, current_winner_id, initial_price, current_price, current_max_bid, end_date";

	public function addBidItem($item_id, $initialPrice, $endDate){
			$insvalue = "('".$item_id."', '".			
			"1"."', '".		
			$initialPrice."', '".									
			$initialPrice."', '".		
			$initialPrice."', '".		
			$endDate."')";

		$sql = "INSERT INTO bid_items ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query > 0){
			return true;
		}
		return false;
	}

	public function editBidItem($item_id, $initialPrice, $endDate)
  {
    $this->load->helper('url');
    
 $data=array(  
    'initial_price'=>$initialPrice,
    'end_date'=>$endDate,
  );
      $this->db->where('item_id', $item_id);
      return $this->db->update('bid_items', $data);
  }
	
	function __construct(){
		parent::__construct();
		$this->table_name = "bid_items";
	}


	function setCurrentMaxBid($item_id, $ncmb){
		$sql = "UPDATE bid_items SET current_max_bid = $ncmb WHERE item_id = $item_id";
		$this->db->query($sql);
	}

	function setCurrentWinnerID($item_id, $user_id){
		$sql = "UPDATE bid_items SET current_winner_id = $user_id WHERE item_id = $item_id";
		$this->db->query($sql);
	}

	function setCurrentPrice($item_id, $nprice){
		$sql = "UPDATE bid_items SET current_price = $nprice WHERE item_id = $item_id";
		$this->db->query($sql);
	}

	function getCurrentMaxBid($item_id){
		$sql = "SELECT current_max_bid FROM bid_items WHERE item_id = '$item_id'";
		$query = $this->db->query($sql);
		return $query->first_row()->current_max_bid;
	}

	function getCurrentWinnerID($item_id){
		$sql = "SELECT current_winner_id FROM bid_items WHERE item_id = '$item_id'";
		$query = $this->db->query($sql);	
		return $query->first_row()->current_winner_id;
	}

	function getCurrentPrice($item_id){
		$sql = "SELECT current_price FROM bid_items WHERE item_id = '$item_id'";
		$query = $this->db->query($sql);	
		return $query->first_row()->current_price;
	}

	function getInitialPrice($item_id){
		$sql = "SELECT initial_price FROM bid_items WHERE item_id = '$item_id'";
		$query = $this->db->query($sql);	
		return $query->first_row()->initial_price;
	}	

	function test(){
		return $this->db->query("SELECT * FROM bid_items");
	}
	function getBidItemByItemID($id){
		$query = $this->db->query("SELECT * FROM bid_items WHERE item_id = "."'".$id."'");
		return $query->row_array();
	}


	function getBidItemBySellerID($id){
		$query = $this->db->query("SELECT * FROM bid_items WHERE seller_id = '".$id."'");
		return $query->row_array();
	}	


	function verifyBidItemByID($id){
		$query = $this->db->query("SELECT * FROM bid_items WHERE item_id = '$id'");
		if($query->num_rows() > 0) return true;
		return false;
	}


//	public function manageBidItemByItemID($itemid,$current_winner_id,&initial_price,$current_price,$current_max_bid,$end_date,$seller_id){

		//null concern if null -> don't update or update using old data 
//		$sql = "UPDATE bid_items 
//				SET current_winner_id = "."'".$current_winner_id."', 
//				initial_price = "."'".$initial_price."',
//				current_price = "."'".$current_price."',
//				current_max_bid = "."'".$current_max_bid."',
//				end_date = "."'".$end_date."',
	//			seller_id = "."'".$seller_id."'".				 
	//			" WHERE item_id = "."'".$itemid."'";
//
//		$query = $this->db->query($sql);
//	}

} ?>