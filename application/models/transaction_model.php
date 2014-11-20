<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction_Model extends CI_Model {

	private $_transactionID;
	private $_buyerID;
	private $_sellerID;
	private $_itemID;
	private $_placementDate;
	private $_quantity;
	private $_transactionStatus;
	
	function __construct(){
		parrent::__construct();
	}


	//commit the object in php to a tuple in database

	public function commit(){
		$data = array(
			'transactionID' => $this->_transactionID;
			'buyerID' => $this->_buyerID;
			'sellerID' => $this->_sellerID;
			'itemID' => $this->_itemID;			
			'placementDate' => $this->_placementDate;
			'quantity' => $this->_quantity;
			'transactionStatus' => $this->_transactionStatus;
			);

		if($this->_transactionID > 0){	//user already exists, just update user info
			if ($this->db->update("Transaction", $data, array("transactionID" => $this->_itemID))) {
				return true;
			}

		}
		else {	//user doesn't exist, create new user
			if ($this->db->insert("Transaction", $data)) {
				//Now we can get the ID and update the newly created object
				$this->_transactionID = $this->db->insert_id();
				return true;
			}

		}
	}

	public function getTransactionID(){
		return $this->_transactionID;
	}

	public function setTransactionID($transid){
		$this->_transactionID = $transid;
	}

	public function getBuyerID(){
		return $this->_buyerID;
	}

	public function setBuyerID($buyerid){
		$this->_buyerID = $buyerid;
	}

	public function getSellerID(){
		return $this->_sellerID;
	}

	public function setSellerID($sellerid){
		$this->_sellerID = $sellerid;
	}


	public function getItemID(){
		return $this->_itemID;
	}

	public function setItemID($itemid){
		$this->_itemID = $itemid;
	}

	public function getPlacementDate(){
		return $this->_placementDate;
	}

	public function setPlacementDate($date){
		$this->_placementDate = $date;
	}
	public function getQuantity(){
		return $this->_quantity;
	}

	public function setQuantity($quantity){
		$this->_quantity = $quantity;
	}
	public function getTransactionStatus(){
		return $this->_transactionStatus;
	}

	public function setTransactionStatus($transstatus){
		$this->_transactionStatus = $transstatus;
	}

}
?>
