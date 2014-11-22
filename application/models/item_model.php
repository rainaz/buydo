<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item_model extends CI_Model {

	private $_itemID;
	private $_itemName;
	private $_postedDate;
	private $_agreement;
	private $_status;
	private $_spec;
	private $_ownerID;
	private $_picture;


	function __construct(){
		parent::__construct();
	}


	//commit the object in php to a tuple in database

	public function commit(){
		$data = array(
			'itemID' => $this->_itemID;
			'itemName' => $this->_itemName;
			'postedDate' => $this->_postedDate;
			'agreement' => $this->_agreement;
			'status' => $this->_status;
			'spec' => $this->_spec;
			'ownerID' => $this->_ownerID;
			'picture' => $this->_picture;			
			);

		if($this->_itemID > 0){	//user already exists, just update user info
			if ($this->db->update("Item", $data, array("itemID" => $this->_itemID))) {
				return true;
			}

		}
		else {	//user doesn't exist, create new user
			if ($this->db->insert("Item", $data)) {
				//Now we can get the ID and update the newly created object
				$this->_itemID = $this->db->insert_id();
				return true;
			}

		}
	}

	public function getItemID(){
		return $this->_itemID;
	}

	public function setItemID($itemid){
		$this->_itemID = $itemid;
	}

	public function getItemName(){
		return $this->_itemName;
	}

	public function setItemName($itemname){
		$this->_itemName = $itemname;
	}
	public function getPostedDate(){
		return $this->_postedDate;
	}

	public function setPostedDate($date){
		$this->_postedDate = $date;
	}
	public function getAgreement(){
		return $this->_agreement;
	}

	public function setItemID($agreement){
		$this->_agreement = $agreement;
	}
	public function getStatus(){
		return $this->_status;
	}

	public function setStatus($status){
		$this->_status = $status;
	}
	public function getSpec(){
		return $this->_spec;
	}

	public function setSpec($spec){
		$this->_spec = $spec;
	}
	public function getOwnerID(){
		return $this->_ownerID;
	}

	public function setOwnerID($ownerid){
		$this->_ownerID = $ownerid;
	}
	public function getPicture(){
		return $this->_spec;
	}

	public function setPicture($pic){
		$this->_picture = $pic;
	}

}
?>
