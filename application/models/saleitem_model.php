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

 public function editSaleItem()
  {
    $this->load->helper('url');
    
 $data=array(
 	  'item_id'=>$this->input->post('item_id'),   
    'price'=>$this->input->post('price'),
    'quantity_in_stock'=>$this->input->post('quantity_in_stock'),
  );
      $this->db->where('item_id', $this->input->post('item_id'));
      return $this->db->update('sale_items', $data);
  }
	public function soldOut($sale_item, $quantity){
		$tmp = $this->db->query("SELECT quantity_in_stock FROM sale_items WHERE item_id=$sale_item");
		if($tmp == FALSE) 
			return FALSE;
		$old_quantity = $tmp->first_row()->quantity_in_stock;
		$new_quantity = $old_quantity - $quantity;
		if($new_quantity >= 0)
			$this->db->query("UPDATE sale_items SET quantity_in_stock=".$new_quantity." WHERE item_id=$sale_item");
		return $new_quantity;

	}



}
?>
