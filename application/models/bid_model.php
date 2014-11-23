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
	private $attributes = "bid_id, item_id, buyer_id, current_bid, max_bid, bid_date";

	public function addBid($itemID, $buyerID, $currentBid, $maxBid,$bidDate){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$itemID."', '".
			$buyerID."', '".		
			$currentBid."', '".		
			$maxBid."', '".
			$bidDate."')";

		$sql = "INSERT INTO bid ($this->attributes) VALUES ".$insvalue;
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
		return $this->db->query("SELECT * FROM bid WHERE bid_id = ".$id);
	}
	function getBidByBuyerID($id){
		return $this->db->query("SELECT * FROM bid WHERE buyer_id = ".$id);
	}
	function getBidByItemID($id){
		return $this->db->query("SELECT * FROM bid WHERE item_id = ".$id);
	}
	function setCurrentBid($itemid, $ncurrentbid){
		$sql = "UPDATE bid SET current_bid = $ncurrentbid WHERE item_id = $itemid";
		$query = $this->db->query($sql);
	}
	function setMaxbid($item, $nmaxbid){
		$sql = "UPDATE bid SET max_bid = $nmaxbid WHERE item_id = $itemid";
		$query = $this->db->query($sql);
	}

	function getBidItemInfo($id){
		$query = $this->db->query("SELECT `a`.`item_name`, `a`.`agreement`, `a`.`status`, `a`.`spec`, `b`.`end_date`, `b`.`initial_price`, `b`.`current_price`, `a`.`picture`  FROM `items` AS `a` INNER JOIN `bid_items` AS `b` ON `a`.`item_id`=`b`.`item_id` AND `a`.`item_id`=".$id.";" )->first_row();
		$timeLeft = (new DateTime($query->end_date))->diff(new DateTime());
		$data = array(
			"itemName" => $query->item_name,
			"initialPrice" => $query->initial_price,
			"currentPrice" => $query->current_price,
			"timeLeft" => $timeLeft->format("%Y-%m-%d %H:%i:%s"),
			"isClose" => $timeLeft->format("%R") == "+",
			"status" => $query->status,
			"spec" => $query->spec,
			"agreement" => $query->agreement,
			"nextBid" => $query->current_price + $query->initial_price*0.05,
			"picURL" => $query->picture
		);
		return $data;
	}


}
?>
