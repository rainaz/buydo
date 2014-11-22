<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {

	/*private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "admin_id";

	public function addAdmin(){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."'");

		$sql = "INSERT INTO admins ($attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = admins;
	}

	function test(){
		return $this->-db->query("SELECT * FROM admins");
	}
	function getAdminByUserID($id){
		return $this->db->query("SELECT * FROM admins WHERE admin_id = ".$id);
	}

}
?>
