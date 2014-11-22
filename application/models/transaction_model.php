<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction_model extends CI_Model {

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


}
?>
