<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction_Model extends CI_Model {

	private $attributes = "transaction_id, buyer_id, seller_id, item_id, placement_date, quantity, transaction_status";
	
	function __construct(){
		parent::__construct();
	}

	public function addTransaction($buyerid, $sellerid, $itemid, $placementdate, $quantity, $transactionstatus){
		
		$lastrow = $this->db->insert_id();
		$insvalue = "('".$lastrow."', '".
			$buyerid."', '".
			$sellerid."', '".
			$itemid."', '".
			$placementdate."', '".
			$quantity."', '".
			$transactionstatus."')";

		$sql = "INSERT INTO transaction ($attributes) VALUES $insvalue";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;

	}

	public function getBuyerIDFromTransactionID($transid){
		$query = $this->db->query("SELECT buyer_id FROM transactions WHERE transaction_id = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->buyer_id;
		}
		return false;
	}

	public function getSellerIDFromTransactionID($transid){
		$query = $this->db->query("SELECT seller_id FROM transactions WHERE transaction_id = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->seller_id;
		}
		return false;
	}	

	public function getItemIDFromTransactionID($transid){
		$query = $this->db->query("SELECT item_id FROM transactions WHERE transaction_id = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->item_id;
		}
		return false;
	}	

	public function getTransactionStatusFromTransactionID($transid){
		$query = $this->db->query("SELECT transaction_status FROM transactions WHERE transaction_id = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->transaction_status;
		}
		return false;
	}		

	public function getPlacementDateFromTransactionID($transid){
		$query = $this->db->query("SELECT placement_date FROM transactions WHERE transaction_id = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->placement_id;
		}
		return false;
	}		


	public function setTransactionStatusFromTransactionID($transid, $nstatus){
		$sql = "UPDATE transactions SET transaction_status = "."'".$nstatus."'"."WHERE transaction_id = "."'".$transid."'";
		$query = $this->db->query($sql);	
	}

	// private $_transactionID;
	// private $_buyerID;
	// private $_sellerID;
	// private $_itemID;
	// private $_placementDate;
	// private $_quantity;
	// private $_transactionStatus;


	//commit the object in php to a tuple in database

	// public function commit(){
	// 	$data = array(
	// 		'transactionID' => $this->_transactionID;
	// 		'buyerID' => $this->_buyerID;
	// 		'sellerID' => $this->_sellerID;
	// 		'itemID' => $this->_itemID;			
	// 		'placementDate' => $this->_placementDate;
	// 		'quantity' => $this->_quantity;
	// 		'transactionStatus' => $this->_transactionStatus;
	// 		);

	// 	if($this->_transactionID > 0){	//user already exists, just update user info
	// 		if ($this->db->update("Transaction", $data, array("transactionID" => $this->_itemID))) {
	// 			return true;
	// 		}

	// 	}
	// 	else {	//user doesn't exist, create new user
	// 		if ($this->db->insert("Transaction", $data)) {
	// 			//Now we can get the ID and update the newly created object
	// 			$this->_transactionID = $this->db->insert_id();
	// 			return true;
	// 		}

	// 	}
	// }	


}
?>
