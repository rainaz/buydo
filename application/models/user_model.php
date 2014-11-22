<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model {

	private $personal="user_id, name, surname, email, creditcard, birthday, country,sent_address,address";
	private $account = "username, password, phone_no";
	private $ban = "start_banned, banned_duration, banned_reason, penalty_count";
	private $attributes = $personal.",".$account.",".$ban;


	function __construct(){
		parent::__construct();
	}

	public function test(){
		$query = $this->db->query("SELECT * FROM person");
		return $query->result();
	}

	// this function is to be moved to FACTORY	

	//creditcard and sentAddress can be null
	public function addUser($name, $surname, $email, $creditcard, $birthday, $country
		, $sentAddress, $address, $username, $password, $phoneNo
		, $bannedby, $startBanned, $bannedDuration, $bannedReason, $penaltyCount){
		$lastrow = $this->db->insert_id();		
		$insvalue = "('".$lastrow."', '".
			$name."', '".
			$surname."', '".
			$email."', '".
			$creditcard."', '".
			$birthday."', '".
			$country."', '".
			$sentAddress."', '".
			$address."', '".
			$username."', '".
			$password."', '".
			$phoneNo."', '".
			$startBanned."', '".
			$bannedDuration."', '".
			$bannedReason."', '".
			$penaltyCount."')";
		$sql = "INSERT INTO user ($attributes) values ".$insvalue;

		if(/* no email */)
		$query = $this->db->query($sql);

		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;

	}

	public function verifyUserExistByEmail($email){
		$sql = "SELECT email FROM user WHERE email = "."'".$email."'";		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return true;
		}
		return false;
	}

	public function getLastRow(){
		return $this->db->insert_id();
	}

	public function getUserIDByEmail($email){
		$query = $this->db->query("SELECT user_id FROM user WHERE email = '".$email."'");
		if($query->num_rows() > 0){
			return $query->row()->email;
		}
		return false;
	}

	public function getUserByUserID($id){
		$query = $this->db->query("SELECT $this->attributes FROM user WHERE userID = '".$id."'");
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}

	public function setNameByUserID($id, $nname){
		$sql = "UPDATE user SET name = "."'".$nname."'"."WHERE userID = "."'".$id."'";
		$query = $this->db->query($sql);		
	}

	public function setSurnameByUserID($id, $nsurname){
		$sql = "UPDATE user SET surname = "."'".$nsurname."'"."WHERE userID = "."'".$id."'";
		$query = $this->db->query($sql);	
	}


	public function manageProfileByUserID($id,$name,&surname,$sentAddress,$address,$country,$email,$phoneNo,$creditcard,$password){


		$sql = "UPDATE user 
				SET name = "."'".$name."', 
				surname = "."'".$surname."',
				sent_address = "."'".$sentAddress."',
				address = "."'".$address."',
				country = "."'".$country."',
				email = "."'".$email."',
				phone_no = "."'".$phoneNo."',
				creditcard = "."'".$creditcard."',
				password = "."'".$password.".' 
				WHERE userID = "."'".$id."'"
	}


	// private $_userID;
	// private $_name;
	// private $_surname;
	// private $_creditcard;
	// private $_birthday;
	// private $_country;
	// private $_sentAddress;
	// private $_address;
	// private $_username;
	// private $_password;
	// private $_phoneNo;
	// private $_bannedby;
	// private $_startBanned;
	// private $_bannedDuration;
	// private $_bannedReason;
	// private $_penaltyCount;

		//commit the object in php to a tuple in database

	// public function commit(){
	// 	$data = array(
	// 		'userID' => $this->_userID;
	// 		'name' => $this->_name;
	// 		'surname' => $this->_surname;
	// 		'creditcard' => $this->_creditcard;
	// 		'birthday' => $this->_birthday;
	// 		'country' => $this->_country;
	// 		'sentAddress' => $this->_sentAddress;
	// 		'address' => $this->_address;
	// 		'username' => $this->_username;
	// 		'password' => $this->_password;
	// 		'phoneNo' => $this->_phoneNo;
	// 		'bannedby' => $this->_bannedby;
	// 		'startBanned' => $this->_startBanned;
	// 		'bannedDuration' => $this->_bannedDuration;
	// 		'bannedReason' => $this->_bannedReason;
	// 		'penaltyCount' => $this->_penaltyCount;
	// 		);

	// 	if($this->_userID > 0){	//user already exists, just update user info
	// 		if ($this->db->update("User", $data, array("userID" => $this->_userID))) {
	// 			return true;
	// 		}

	// 	}
	// 	else {	//user doesn't exist, create new user
	// 		if ($this->db->insert("User", $data)) {
	// 			//Now we can get the ID and update the newly created object
	// 			$this->_userID = $this->db->insert_id();
	// 			return true;
	// 		}

	// 	}
	// }



}
?>
