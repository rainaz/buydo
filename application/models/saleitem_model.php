<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SaleItem_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "item_id, price, quantity_in_stock";

public function addBidItem($price, $quantityInStock){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$price."', '".
			$quantityInStock."')";

		$sql = "INSERT INTO sale_items ($attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = sale_items;
	}

	function test(){
		return $this->-db->query("SELECT * FROM sale_items");
	}
	function getSaleItemsByItemID($id){
		return $this->db->query("SELECT * FROM sale_items WHERE item_id = ".$id);
	}
	function getSaleItemBySellerID($id){
		return $this->db->query("SELECT * FROM sale_items WHERE seller_id = ".$id);
	}

