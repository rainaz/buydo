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

public function addBidItem($currentWinner,$initialPrice, $currentPrice, $currentMaxBid, $endDate, $sellerID){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$currentWinner."', '".
			$initialPrice."', '".
			$currentPrice."', '".
			$currentMaxBid."', '".
			$endDate."', '".
			$sellerID."')";

		$sql = "INSERT INTO bid_items ($attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = bid_items;
	}

	function test(){
		return $this->-db->query("SELECT * FROM bid_items");
	}
	function getBidItemsByItemID($id){
		return $this->db->query("SELECT * FROM bid_items WHERE item_id = ".$id);
	}
	function getBidItemBySellerID($id){
		return $this->db->query("SELECT * FROM bid_items WHERE seller_id = ".$id);
	}

