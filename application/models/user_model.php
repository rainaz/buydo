<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

	private $personal="user_id, name, surname, email, creditcard, birthday, country,sent_address,address";
	private $account = "username, password, phone_no";
	private $ban = "start_banned, banned_duration, banned_reason, penalty_count";
	private $attributes; 


	function __construct(){
		parent::__construct();
		$this->attributes = $this->personal.",".$this->account.",".$this->ban;
	}

	public function test(){
		$query = $this->db->query("SELECT * FROM users");
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
		$sql = "INSERT INTO users ($this->attributes) values ".$insvalue;

		if(verifyUserExistByEmail($email))
			$query = $this->db->query($sql);

		if($query > 0){
			return true;
		}
		return false;

	}
	
	public function isAuthenValid($username, $password){
		$query = $this->db->query("SELECT `user_id` FROM `users` WHERE `username`='".$username."' AND `password`='".sha1($password)."';");
		if($query->row_nums() !=1 )
			return false;
		else 
			return $query->first_row()->user_id;
	}

	public function verifyUserExistByEmail($email){
		$sql = "SELECT user_id FROM users WHERE email = "."'".$email."'";		
		$query = $this->db->query($sql);
		if($query > 0){
			return true;
		}
		return false;
	}



	public function getLastRow(){
		return $this->db->insert_id();
	}

	public function getUserIDByEmail($email){
		$query = $this->db->query("SELECT user_id FROM users WHERE email = '".$email."'");
		if($query->num_rows() > 0){
			return $query->row()->user_id;
		}
		return false;
	}

	public function getUserByUserID($id){
		$query = $this->db->query("SELECT $this->attributes FROM users WHERE user_id = '".$id."'");
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}

	public function setNameByUserID($id, $nname){
		$sql = "UPDATE users SET name = "."'".$nname."'"."WHERE user_id = "."'".$id."'";
		$query = $this->db->query($sql);		
		if($query > 0) return true;
		return false;
	}

	public function setSurnameByUserID($id, $nsurname){
		$sql = "UPDATE users SET surname = "."'".$nsurname."'"."WHERE user_id = "."'".$id."'";
		$query = $this->db->query($sql);	
		if($query > 0) return true;
		return false;
	}


	public function manageProfileByUserID($id,$name,&surname,$sentAddress,$address,$country,$email,$phoneNo,$creditcard,$password){

		//null concern if null -> don't update or update using old data 
		$sql = "UPDATE users 
				SET name = "."'".$name."', 
				surname = "."'".$surname."',
				sent_address = "."'".$sentAddress."',
				address = "."'".$address."',
				country = "."'".$country."',
				email = "."'".$email."',
				phone_no = "."'".$phoneNo."',
				creditcard = "."'".$creditcard."',
				password = "."'".$password.".' 
				WHERE userID = "."'".$id."'";

		$query = $this->db->query($sql);
	}


}
?>
