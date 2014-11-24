<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

    private $attributes = "user_id, name, surname, email, creditcard, birthday, country,sent_address,address,
    username, password, phone_no,start_banned, banned_duration, banned_reason, penalty_count";



 public function __construct()
 {
  parent::__construct();
      $this->load->model('buyer_model');
    $this->load->model('seller_model');

 }
  public function test(){

    $query = $this->db->query("SELECT * FROM users");
    return $query->result();
  }

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
    if($query->num_rows() !=1 )
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

  public function findUserByEmail($email){
    $sql = "SELECT user_id FROM users WHERE email = "."'".$email."'";   
    $query = $this->db->query($sql);
    if($query->num_rows() == 1){
      	$user_id = $query->first_row()->user_id;
		$hash = sha1($email.(new DateTime())->format("Y-m-d %s").(string)rand());
		$isAsked = $this->db->query("DELETE FROM `recover_url` WHERE `user_id`=".$user_id.";");
		$tmp = $this->db->query("INSERT INTO `recover_url`(`user_id`,`user_email`, `url`) VALUES (".$user_id.", '".$email."', '".$hash."');");
		return array("hash" => $hash, "email" => $email);

    }
    return false;
  }
  public function changePassword($hash, $newPass){
	  $user_id = $this->db->query("SELECT `user_id` FROM `recover_url` WHERE `url`='".$hash."';");
	  if(!$user_id)
		  return false; // no hash found
	  $tmp = $this->db->query("UPDATE `users` SET `password`='".sha1($newPass)."' WHERE `user_id`=".$user_id->first_row()->user_id.";");
	  if($tmp)
		  $this->db->query("DELETE FROM `recover_url` WHERE `user_id`=".$user_id->first_row()->user_id.";");
	  return true;
  }


  public function getLastRow(){
    return $this->db->insert_id();
  }

  public function getAllUserIDAndNameAndType(){
    //$query = $this->db->query("SELECT user_id, username FROM users");
    //only buyer
    $sql1 = "SELECT users.user_id, name, username FROM buyers LEFT JOIN users  ON buyers.user_id = users.user_id";
    $sql2 = "SELECT users.user_id, name, username FROM sellers LEFT JOIN users  ON sellers.user_id = users.user_id";

    $query1 = $this->db->query($sql1);
    $qarray1 = $query1->result_array();
    $query2 = $this->db->query($sql2);
    $qarray2 = $query2->result_array();

    $resultArray = array();
    foreach($qarray1 as $row){
      $narray = array(
        array(
          "user_id"=>$row['user_id'],
          "name"=>$row['name'],
          "username"=>$row['username'],
          "user_type"=>"Buyer"
        )
      );
      $resultArray = array_merge($resultArray, $narray);
    }
    foreach($qarray2 as $row){
      $narray = array(
        array(
          "user_id"=>$row['user_id'],
          "name"=>$row['name'],
          "username"=>$row['username'],
          "user_type"=>"Seller"
        )
      );
      $resultArray = array_merge($resultArray, $narray);
    }
    return $resultArray;
  }

  public function getUserIDByEmail($email){
    $query = $this->db->query("SELECT user_id FROM users WHERE email = '".$email."'");
    if($query->num_rows() > 0){
      return $query->row()->user_id;
    }
    return false;
  }
  public function getEmailByUserID($userID){
    $query = $this->db->query("SELECT email FROM users WHERE user_id = '".$userID."'");
    if($query->num_rows() > 0){
      return $query->row()->email;
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

  public function setPenaltyCountByUserID($id, $count){
    $sql = "UPDATE users SET penalty_count = "."'".$count."'"."WHERE user_id = "."'".$id."'";
    $query = $this->db->query($sql);  
    if($query > 0) return true;
    return false;
  }

  public function getNameByUserID($id){
    $query = $this->db->query("SELECT name FROM users WHERE user_id = $id");
    if($query->num_rows() > 0){
      return $query->row()->name;
    }
    return false;
  }  

  public function getPenaltyCountByUserID($id){
    $query = $this->db->query("SELECT penalty_count FROM users WHERE user_id = '".$id."'");
    if($query->num_rows() > 0){
      return $query->row()->penalty_count;
    }
    return false;    
  }

  public function getPasswordByID($id){
    $query = $this->db->query("SELECT password FROM users WHERE user_id = $id");
    if($query->num_rows() > 0){
      return $query->row()->password;
    }
    return false;
  }




  public function manageProfileByUserID($id,$name,$surname,$sentAddress,$address,$country,$email,$phoneNo,$creditcard,$password){

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
        WHERE user_id = "."'".$id."'";

    $query = $this->db->query($sql);
  }

  public function manageProfile()
  {
    $this->load->helper('url');
    
    $actualpassword = $this->getPasswordByID($this->session->userdata('user_id'));
    $oldpassword = sha1($this->input->post('old_password'));

    if($actualpassword != $oldpassword) {
      return false;
    }
    if($this->input->post('password') != $this->input->post('confirm_password')){
       return false;
    }

    if(strlen($this->input->post('password') )==0){
      $password = $actualpassword;
    }
    else $password = sha1($this->input->post('password') );

  if(strlen($this->input->post('creditcard'))<2 && strlen($this->input->post('sent_address'))<2){
  $data=array(
    'name'=>$this->input->post('name'),   
    'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),     
    'birthday'=>$this->input->post('birthday'),
    'country'=>$this->input->post('country'),
    'address'=>$this->input->post('address'),
    'password'=>$password,
     'phone_no'=>$this->input->post('phone_no'),
  );
  }
  else if(strlen($this->input->post('creditcard'))<2 && strlen($this->input->post('sent_address'))>2){
  $data=array(
    'name'=>$this->input->post('name'),   
    'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),    
    'birthday'=>$this->input->post('birthday'),
    'country'=>$this->input->post('country'),
    'sent_address'=>$this->input->post('sent_address'),
    'address'=>$this->input->post('address'),
    'password'=>$password,
     'phone_no'=>$this->input->post('phone_no'),
  );
  }
  else if(strlen($this->input->post('creditcard'))>2 && strlen($this->input->post('sent_address'))<2){
  $data=array(
    'name'=>$this->input->post('name'),   
    'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),   
    'creditcard'=>$this->input->post('creditcard'),   
    'birthday'=>$this->input->post('birthday'),
    'country'=>$this->input->post('country'),
    'address'=>$this->input->post('address'),
    'password'=>$password,
     'phone_no'=>$this->input->post('phone_no'),
  );
  }
  else{
  $data=array(
    'name'=>$this->input->post('name'),   
    'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),   
    'creditcard'=>$this->input->post('creditcard'),   
    'birthday'=>$this->input->post('birthday'),
    'country'=>$this->input->post('country'),
    'sent_address'=>$this->input->post('sent_address'),
    'address'=>$this->input->post('address'),
    'password'=>$password,
     'phone_no'=>$this->input->post('phone_no'),
  );
  }





      $this->db->where('user_id', $this->session->userdata('user_id'));
      return $this->db->update('users', $data);
  }


 function login($username,$password)
 {
    $this->db->where("username",$username);
   $this->db->where("password",$password);

   $query=$this->db->get("users");
  if($query->num_rows()>0)
   {
       foreach($query->result() as $rows)
     {
        //add all data to session
       $newdata = array(
        'user_id'  => $rows->user_id,
       'user_name'  => $rows->username,
       'user_email'    => $rows->email,
       'logged_in'  => TRUE,
      );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }


 public function add_user()
 {
  $user_type = $this->input->post('user_type');
  $data=array(
    'name'=>$this->input->post('name'),   //
    'surname'=>$this->input->post('surname'),   //
    'email'=>$this->input->post('email'),   //
    'creditcard'=>$this->input->post('creditcard'),  // 
    'birthday'=>$this->input->post('birthday'),//
    'country'=>$this->input->post('country'),//
    'sent_address'=>$this->input->post('sent_address'),//
    'address'=>$this->input->post('address'),
    'username'=>$this->input->post('username'),//
    'password'=>sha1($this->input->post('password')),//
     'phone_no'=>$this->input->post('phone_no'),//
     'start_banned'=>"1993-04-12",
     'banned_duration'=>-1,
     'banned_reason'=>"none",
     'penalty_count'=>0,
  );
  
  $result = $this->db->insert('users',$data);
  if($result == 0) return false;
  $insertid = $this->db->insert_id();
  if($user_type=='buyer'){
      $this->buyer_model->addBuyer( $insertid);
      return true;
  }
  else if($user_type=='seller'){
      $this->seller_model->addSeller( $insertid);
      return true;
  }

 }
	public function addPenalty($user_id){
		$penalty = $this->db->query("SELECT penalty_count FROM users WHERE user_id=$user_id;")->first_row()->penalty_count;
		$penalty = ($penalty + 1) % 3;
		echo $penalty;
		if($penalty == 0){
			$this->db->query("UPDATE users SET penalty_count=$penalty, banned_duration=3, start_banned='".(new DateTime())->format("Y-m-d")."' WHERE user_id=$user_id");
		}else{
			$this->db->query("UPDATE users SET penalty_count=$penalty WHERE user_id=$user_id");
		}

	
	}
}
?>
