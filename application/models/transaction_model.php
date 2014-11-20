<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction_Model extends CI_Model {

	private $attributes = "transactionID, buyerID, sellerID, itemID, placementDate, quantity, transactionStatus";
	
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

		$sql = "INSERT INTO transaction ($attributes) values $insvalue";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;

	}

	public function getBuyerIDFromTransactionID($transid){
		$query = $this->db->query("SELECT buyerID FROM transaction WHERE transactionID = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->buyerID;
		}
		return false;
	}

	public function getSellerIDFromTransactionID($transid){
		$query = $this->db->query("SELECT sellerID FROM transaction WHERE transactionID = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->sellerID;
		}
		return false;
	}	

	public function getItemIDFromTransactionID($transid){
		$query = $this->db->query("SELECT itemID FROM transaction WHERE transactionID = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->itemID;
		}
		return false;
	}	

	public function getTransactionStatusFromTransactionID($transid){
		$query = $this->db->query("SELECT transactionStatus FROM transaction WHERE transactionID = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->transactionStatus;
		}
		return false;
	}		

	public function getPlacementDateFromTransactionID($transid){
		$query = $this->db->query("SELECT placementDate FROM transaction WHERE transactionID = '".$transid."'");
		
		if($query->num_rows() > 0){
			return $query->row()->placementDate;
		}
		return false;
	}		


	public function setTransactionStatusFromTransactionID($transid, $nstatus){
		$sql = "UPDATE transaction SET transactionStatus = "."'".$nstatus."'"."WHERE userID = "."'".$transid."'";
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
