<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction_model extends CI_Model {

	private $table_name;
	private $attributes = "transaction_id, buyer_id, item_id, placement_date, quantity, transaction_status";
	
	function __construct(){
		parent::__construct();
		$this->table_name = "transactions";
	}

	public function addTransaction($buyerid, $itemid, $quantity, $transactionstatus){
		$transaction_id = $this->db->count_all($this->table_name) + 1;
		//$lastrow = $this->db->insert_id();
		$insvalue = "('".
			$transaction_id."', '".
			$buyerid."', '".			
			$itemid."', '".
			date('Y-m-d')."', '".
			$quantity."', '".
			$transactionstatus."')";

		$sql = "INSERT INTO transactions ($this->attributes) VALUES $insvalue";
		$query = $this->db->query($sql);

		if($query > 0){
			return true;
		}
		return false;

	}

	public function getTransactionByBuyerID($buyerid){
		$query = $this->db->query("SELECT * FROM transactions WHERE buyer_id = "."'".$buyerid."'");
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return false;
	}

	// public function getTransactionBySellerID($sellerid){
	// 	$query = $this->db->query("SELECT * FROM transactions WHERE seller_id = "."'".$sellerid."'");
	// 	if($query->num_rows() > 0) {
	// 		return $query->result();
	// 	}
	// 	return false;
	// }

	public function getTransactionByBuyerIDAndStatus($buyerid, $status){
		$query = $this->db->query("SELECT * FROM transactions WHERE buyer_id = "."'".$buyerid."' AND status = "."'".$status."'");
		if($query->num_rows() > 0){
			return $query->result();
		}
		return false;
	}

	// public function getTransactionBySellerIDAndStatus($sellerid, $status){
	// 	$query = $this->db->query("SELECT * FROM transactions WHERE seller_id = "."'".$sellerid."' AND status = "."'".$status."'");
	// 	if($query->num_rows() > 0) {
	// 		return $query->result();
	// 	}
	// 	return false;
	// }		
	public function getTransactionFromStatus($status){
		$query = $this->db->query("SELECT buyer_id, transaction_id FROM transactions WHERE transaction_status = '".$status."'");
		
		if($query->num_rows() > 0){
			return $query->result();
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

	// public function getSellerIDFromTransactionID($transid){
	// 	$query = $this->db->query("SELECT seller_id FROM transactions WHERE transaction_id = '".$transid."'");
		
	// 	if($query->num_rows() > 0){
	// 		return $query->row()->seller_id;
	// 	}
	// 	return false;
	// }	

	public function getItemFromTransactionID($transaction_id){
		$query = $this->db->query("SELECT `b`.`item_name`, `b`.`owner_id` FROM `transactions` AS `a` INNER JOIN `items` AS `b` ON  `a`.`item_id`=`b`.`item_id` WHERE `a`.`transaction_id`=$transaction_id");
		return $query->first_row()->item_name;
	}

	public function getSellerFromTransactionID($transaction_id){
		$query = $this->db->query("SELECT `c`.`username` FROM (SELECT `b`.`owner_id` FROM `transactions` AS `a` INNER JOIN `items` AS `b` ON  `a`.`item_id`=`b`.`item_id` WHERE `a`.`transaction_id`=$transaction_id) AS `ab` INNER JOIN `users` AS `c` ON `ab`.`owner_id`=`c`.`user_id`");
		return $query->first_row()->username;
	}
	public function getTransactionByBuyerIDAndItemID($buyerid, $itemid){
		$query = $this->db->query("SELECT * FROM transactions WHERE buyer_id = "."'".$buyerid."' AND item_id = "."'".$itemid."'");
		if($query->num_rows() > 0) {
			return $query->result();
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

	public function getBuyerEmailFromTransactionID($transid){
		$sql = "SELECT email FROM users INNER JOIN (SELECT * FROM transactions WHERE transaction_id = $transid) AS ntable ON users.user_id = ntable.buyer_id ";
		$query = $this->db->query($sql);	
		return $query->row()->email;

	}

	public function getSellerEmailFromTransactionID($transid){
		$sql = "SELECT email FROM users INNER JOIN (SELECT owner_id FROM items INNER JOIN (SELECT * FROM transactions WHERE transaction_id = $transid) AS ntable ON items.item_id = ntable.item_id) AS mtable ON users.user_id = mtable.owner_id ";
		$query = $this->db->query($sql);
		return $query->row()->email;
	}

	public function setTransactionStatusFromTransactionID($transid, $nstatus){
		$sql = "UPDATE transactions SET transaction_status = "."'".$nstatus."'"." WHERE transaction_id = "."'".$transid."'";
		$query = $this->db->query($sql);	
	}

}
?>
