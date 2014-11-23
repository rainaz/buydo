<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SaleItem_model extends CI_Model {


	private $table_name;
	private $attributes = "item_id, price, quantity_in_stock";

	public function addSaleItemm($itemid, $price, $quantityInStock){		

		$insvalue = "('".$itemid."', '".
			$price."', '".
			$quantityInStock."')";

		$sql = "INSERT INTO sale_items ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query > 0){
			return true;
		}
		return false;
	}


	
	function __construct(){
		parent::__construct();
		$this->table_name = "sale_items";
	}

	function test(){
		return $this->db->query("SELECT * FROM sale_items");
	}

	function getSaleItemByItemID($id){

		return $this->db->query("SELECT * FROM sale_items WHERE item_id = ".$id);
	}
	function getSaleItemBySellerID($id){
		return $this->db->query("SELECT * FROM sale_items WHERE seller_id = ".$id);
	}

	function verifySaleItemByID($id){
		$query = $this->db->query("SELECT * FROM sale_items WHERE item_id = '$id'");
		if($query->num_rows() > 0) return true;
		return false;
	}

 public function addSaleItem()
 {
  $data=array(
    'item_id'=>$this->input->post('item_id'),   
    'price'=>$this->input->post('price'),
    'quantity_in_stock'=>$this->input->post('quantity_in_stock'),
  );
  $this->db->insert('sale_items',$data);
 }



}
?>