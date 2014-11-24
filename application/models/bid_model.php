<?php if ( ! defined('BASEPATH')) exit('No direct script accesss allowed');
class Bid_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "item_id, buyer_id, current_bid, max_bid, bid_date";

	public function addBid($itemID, $buyerID, $currentBid, $maxBid){
		$bidID = $this->db->count_all($this->table_name) + 1;

		$insvalue = "('".
			$itemID."', '".
			$buyerID."', '".		
			$currentBid."', '".		
			$maxBid."', '".
			date('Y-m-d')."')";

		$sql = "INSERT INTO bid ($this->attributes) VALUES ".$insvalue;
		echo $sql;
		$query = $this->db->query($sql);
		if($query > 0){
			return true;
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = "bid";
	}
	function test(){
		return $this->db->query("SELECT * FROM bid");
	}
	function getBidByBidID($id){
		$query = $this->db->query("SELECT * FROM bid WHERE bid_id = ".$id);
		return $query->row_array();
	}
	function getBidByBuyerID($id){
		$query = $this->db->query("SELECT * FROM bid WHERE buyer_id = ".$id);
		return $query->row_array();
	}
	function getBidByItemID($id){
		$query = $this->db->query("SELECT * FROM bid WHERE item_id = ".$id);
		return $query->row_array();
	}
	function setCurrentBid($itemid, $ncurrentbid){
		$sql = "UPDATE bid SET current_bid = $ncurrentbid WHERE item_id = $itemid";
		$query = $this->db->query($sql);
	}
	function setMaxbid($item, $nmaxbid){
		$sql = "UPDATE bid SET max_bid = $nmaxbid WHERE item_id = $itemid";
		$query = $this->db->query($sql);
	}

	//bid history

	function getBidItemIDByUserID($id){
		$sql = "SELECT DISTINCT item_id FROM bid WHERE buyer_id = $id;";
		//echo $sql;
		$query = $this->db->query($sql);
		//var_dump($query->row());
		//echo $query->row();
		return $query->result_array();
	}

	function getMyCurrentBid($id, $item_id){
		$sql = "SELECT MAX(current_bid) FROM bid WHERE buyer_id = $id AND item_id = $item_id";
		$query = $this->db->query($sql);		
		$rowArray = $query->row_array();
		return $rowArray['MAX(current_bid)'];
	}

	function getBidHisotryByUserID($userid){
		$biddingItem = $this->getBidItemIDByUserID($userid);
		$historyArray = array();
		foreach($biddingItem as $row){
			$itemID = $row['item_id'];
			$itemName = $this->item_model->getItemNameByItemID($id);
			$currentItemPrice = $this->biditem_model->getCurrentPrice($itemID);			
			$endDate = $this->biditem_model->getEndDate($itemID);
			$currentMaxBid = $this->biditem_model->getCurrentMaxBid($itemID);
			$currentWinnerID = $this->biditem_model->getCurrentWinnerID($itemID);
			$myCurrentBid = $this->bid_model->getMyCurrentBid($userid, $itemID);
			$itemStatus = $this->item_model->getItemStatusByItemID($id);
			$mergeArray = array(
				array(
					'item_name' => $itemName,
					'currentItemPrice' => $currentItemPrice,
					'end_date' => $endDate,
					'currentMaxBid' => $currentMaxBid,
					'currentWinnerID' => $currentWinnerID,
					'myCurrentBid' => $myCurrentBid,
					'itemStatus' => $itemStatus
					)
				);
			$historyArray = array_merge($historyArray, $mergeArray);
		}

		return $historyArray;
	}

	//calculate bid

	function Bid($item_id, $nmaxbidprice, $user_id){
		$currentMaxBid = $this->biditem_model->getCurrentMaxBid($item_id);
		$currentWinnerID = $this->biditem_model->getCurrentWinnerID($item_id);
		$currentPrice = $this->biditem_model->getCurrentPrice($item_id);
		$initialPrice = $this->biditem_model->getInitialPrice($item_id);

		if($bidprice > $currentMaxBid){
			$this->biditem_model->setCurrentPrice($item_id, $currentMaxBid + $initialPrice*0.05);
			$this->biditem_model->setCurrentWinnerID($item_id, $user_id);
			$this->biditem_model->setCurrentMaxBid($item_id, $nmaxbidprice);
		}
		else {
			$minPrice = $currentMaxBid;
			$xx = $nmaxbidprice + $initialPrice*0.05;
			if($xx < $minPrice) $minPrice = $xx;
			$this->biditem_model->setCurrentPrice($item_id, $minPrice);
			$nmaxbidprice = $minPrice;
		}

		$this->bid->addBid($item_id, $user_id, $nmaxbidprice, $this->biditem_model->getCurrentMaxBid($item_id), $bidDate);

	}
}
?>
