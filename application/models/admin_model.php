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

	//private $table_name;
	private $attributes = "user_id";

	function __construct(){
		parent::__construct();
		//$this->table_name = admins;
	}

	public function addAdmin($userid){		
		$insvalue = "('".$userid."')";

		$sql = "INSERT INTO admins ($this->attributes) VALUES ".$insvalue;
		echo "\n$sql";
		$query = $this->db->query($sql);
		if($query>0) {
			return true;
		}
		return false;
	}



	public function test(){
		return $this->db->query("SELECT * FROM admins");
	}

	function getAdminByUserID($id){
		return $this->db->query("SELECT * FROM admins WHERE admin_id = ".$id);
	}

}
?>
