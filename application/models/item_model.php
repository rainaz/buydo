<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item_model extends CI_Model {


	private $table_name;
	private $attributes = "item_id, item_name, posted_date, agreement, status, spec,owner_id,picture";

	function __construct(){
		parent::__construct();
	}

	public function addItem($itemName,$postedDate,$agreement,$status,$spec,$ownerID,$picture){		
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$itemName."', '".		
			$postedDate."', '".		
			$agreement."', '".
			$status."', '".
			$spec."', '".
			$ownerID."', '".
			$picture."')";

		$sql = "INSERT INTO items ($this->attributes) VALUES ".$insvalue;
		echo "\n$sql";
		$query = $this->db->query($sql);
		if($query>0) {
			return true;
		}
		return false;
	}

	public function getItemByID($id){
		$query = $this->db->query("SELECT * FROM items WHERE item_id = '".$id."'");
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	//commit the object in php to a tuple in database


	

}
?>
