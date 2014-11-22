<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class buy_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "buy_id, item_id, buyer_id, buy_date, quantity";

	public function addBuy($itemID,$buyerID, $buyDate, $quantity){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$itemID."', '".
			$buyerID."', '".
			$buyDate."', '".
			$quantity."')";

		$sql = "INSERT INTO buy ($attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = buy;
	}

	function test(){
		return $this->-db->query("SELECT * FROM buy");
	}
	function getBuyByBuyID($id){
		return $this->db->query("SELECT * FROM buy WHERE buy_id = ".$id);
	}
	function getBuyByBuyerID($id){
		return $this->db->query("SELECT * FROM buy WHERE buyer_id = ".$id);
	}


}
?>