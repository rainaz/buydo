<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Seller_model extends CI_Model {

	/*private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "seller_id";

	public function addSeller($userID){

		$insvalue = "('".$userID."')";

		$sql = "INSERT INTO sellers ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = sellers;
	}

	function test(){
		return $this->-db->query("SELECT * FROM sellers");
	}
	function getSellerByUserID($id){
		return $this->db->query("SELECT * FROM sellers WHERE seller_id = ".$id);
	}


}
?>
