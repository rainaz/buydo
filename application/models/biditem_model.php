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
			""."', '".		
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

	function getEndDate($item_id){
		$sql = "SELECT end_date FROM bid_items WHERE item_id = '$item_id'";
		$query = $this->db->query($sql);	
		return $query->first_row()->end_date;
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

	function getBidWinnerEmail($itemid){
		$winnerid = $this->getCurrentWinnerID($itemid);
		$sql = "SELECT email FROM users WHERE user_id = $winnerid";		
		echo "WINNER email ".$sql."<br/>";
		$query = $this->db->query($sql);
		// var_dump($query);
		return $query->row()->email;
	}

	function getBidLoserEmail($itemid){
		$sql = "SELECT DISTINCT buyer_id FROM bid WHERE item_id = $itemid";
		echo "LOSER email ".$sql."<br/>";
		$query = $this->db->query($sql);
		$loserlist = array();
		$winnerid = $this->getCurrentWinnerID($itemid);
		foreach($query->result() as $row){
			var_dump($row);			
			$loserid = $row->buyer_id;
			if($loserid != $winnerid){
				echo "loserid is = $loserid <br/>";
				$sql2 = "SELECT email FROM users WHERE user_id = $loserid";
				echo "$sql2 <br/>";
				$query2 = $this->db->query($sql2);
				$loserEmail = array($query2->row()->email);
				$loserlist = array_merge($loserlist, $loserEmail);
			}

		}

		return $loserlist;
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