<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model {

	function __construct(){
		parrent::__construct();
	}
	function add_user($name, $surname, )
=======
	private $_userID;
	private $_name;
	private $_surname;
	private $_creditcard;
	private $_birthday;
	private $_country;
	private $_sentAddress;
	private $_address;
	private $_username;
	private $_password;
	private $_phoneNo;
	private $_bannedby;
	private $_startBanned;
	private $_bannedDuration;
	private $_bannedReason;
	private $_penaltyCount;

	function __construct(){
		parrent::__construct();
	}


	//commit the object in php to a tuple in database

	public function commit(){
		$data = array(
			'userID' => $this->_userID;
			'name' => $this->_name;
			'surname' => $this->_surname;
			'creditcard' => $this->_creditcard;
			'birthday' => $this->_birthday;
			'country' => $this->_country;
			'sentAddress' => $this->_sentAddress;
			'address' => $this->_address;
			'username' => $this->_username;
			'password' => $this->_password;
			'phoneNo' => $this->_phoneNo;
			'bannedby' => $this->_bannedby;
			'startBanned' => $this->_startBanned;
			'bannedDuration' => $this->_bannedDuration;
			'bannedReason' => $this->_bannedReason;
			'penaltyCount' => $this->_penaltyCount;
			);

		if($this->_userID > 0){	//user already exists, just update user info
			if ($this->db->update("User", $data, array("userID" => $this->_userID))) {
				return true;
			}

		}
		else {	//user doesn't exist, create new user
			if ($this->db->insert("User", $data)) {
				//Now we can get the ID and update the newly created object
				$this->_userID = $this->db->insert_id();
				return true;
			}

		}
	}

	// this function is to be moved to FACTORY	
	function add_user($name, $surname, $creditcard=NULL, $birthday, $country
		, $sentAddress, $address, $username, $password, $phoneNo
		, $bannedby, $startBanned, $bannedDuration, $bannedReason, $penaltyCount){


	}

	public function getUserID(){
		return $this->_userID;
	}

	public function setUserID($userid){
		$this->_userID = $userid;
	}

	public function getName(){
		return $this->_name;
	}

	public function setName($name){
		$this->_name = $name;
	}

	public function getSurname(){
		return $this->_surname;
	}

	public function setSurname($surname){
		$this->_surname = $surname;
	}	

	public function getCreditcard(){
		return $this->_creditcard;
	}

	public function setCreditcard($creditcard){
		$this->_creditcard = $creditcard;
	}	

	public function getBirthday(){
		return $this->_birthday;
	}

	public function setBirthday($bd){
		$this->_birthday = $bd;
	}	

	public function getCountry(){
		return $this->_country;
	}

	public function setCountry($country){
		$this->_country = $country;
	}	

	public function getSentAddress(){
		return $this->_sentAddress;
	}

	public function setSentAddress($sa){
		$this->_sentAddress = $sa;
	}	

	public function getAddress(){
		return $this->_address;
	}

	public function setAddress($address){
		$this->_address = $address;
	}	

	public function getUsername(){
		return $this->_username;
	}

	public function setUsername($username){
		$this->_username = $username;
	}	

	public function getPassword(){
		return $this->_password;
	}

	public function setName($passwd){
		$this->_password = $passwd;
	}	

	public function getPhoneNo(){
		return $this->_phoneNo;
	}

	public function setPhoneNo($phoneNo){
		$this->_phoneNo = $phoneNo;
	}	

	public function getBannedBy(){
		return $this->_bannedby;
	}

	public function setBannedBy($bannedby){
		$this->_bannedby = $bannedby;
	}

	public function getStartBanned(){
		return $this->_startBanned;
	}

	public function setStartBanned($startban){
		$this->_startBanned = $startban;
	}
	public function getBannedDuration(){
		return $this->_bannedDuration;
	}

	public function setBannedBy($bannedduration){
		$this->_bannedDuration = $bannedduration;
	}
	public function getBannedReason(){
		return $this->_bannedReason;
	}

	public function setBannedBy($bannedreason){
		$this->_bannedReason = $bannedreason;
	}

	public function getPenaltyCount(){
		return $this->_penaltyCount;
	}

	public function setPenaltyCount($penaltyCount){
		$this->_penaltyCount = $penaltyCount;
	}
>>>>>>> database_mew

}
?>
