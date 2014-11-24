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
	private $attributes = "user_id";

	// public function addSeller($userID){

	// 	$insvalue = "('".$userID."')";

	// 	$sql = "INSERT INTO sellers ($this->attributes) VALUES ".$insvalue;
	// 	$query = $this->db->query($sql);
	// 	if($query->num_rows() > 0){
	// 		return $query->row();
	// 	}
	// 	return false;
	// }
	function __construct(){
		parent::__construct();
		$this->table_name = "sellers";
	}

	function test(){
		return $this->db->query("SELECT * FROM sellers");
	}
	function getSellerByUserID($id){
		$query = $this->db->query("SELECT * FROM sellers WHERE user_id = ".$id);
		return $query->row();
	}

	function verifySellerByUserID($id){
		$query = $this->getSellerByUserID($id);
		if($query) return true;
		else return false;
	}
	public function addSeller($userid){		

		$insvalue = "('".$userid."')";

		$sql = "INSERT INTO sellers ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query > 0){
			return true;
		}
		return false;
	}

}
?>
