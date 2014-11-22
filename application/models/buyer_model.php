<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Buyer_model extends CI_Model {

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

	public function addBuyer($userID){

		$insvalue = "('".$userID."', '"."')";

		$sql = "INSERT INTO buyers ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = buyers;
	}

	function test(){
		return $this->-db->query("SELECT * FROM buyers");
	}
	function getBuyerByUserID($id){
		return $this->db->query("SELECT * FROM buyers WHERE buyer_id = ".$id);
	}

}
?>
