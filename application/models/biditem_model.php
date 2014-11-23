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
	private $attributes = "item_id, current_winner_id, initial_price, current_price, current_max_bid, end_date, seller_id";

	public function addBidItem($item_id, $initialPrice, $endDate, $sellerID){
			$insvalue = "('".$item_id."', '".			
			$initialPrice."', '".						
			$endDate."', '".
			$sellerID."')";

		$sql = "INSERT INTO bid_items ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	
	function __construct(){
		parent::__construct();
		$this->table_name = "bid_items";
	}

	function test(){
		return $this->db->query("SELECT * FROM bid_items");
	}
	function getBidItemByItemID($id){
		return $this->db->query("SELECT * FROM bid_items WHERE item_id = ".$id);
	}
	function getBidItemBySellerID($id){
		return $this->db->query("SELECT * FROM bid_items WHERE seller_id = ".$id);
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