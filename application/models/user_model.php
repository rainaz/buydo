<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

    private $attributes = "user_id, name, surname, email, creditcard, birthday, country,sent_address,address,
    username, password, phone_no,start_banned, banned_duration, banned_reason, penalty_count";



 public function __construct()
 {
  parent::__construct();
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
    
 $data=array(
    'name'=>$this->input->post('name'),   
    'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),   
    'creditcard'=>$this->input->post('creditcard'),   
    'birthday'=>$this->input->post('birthday'),
    'country'=>$this->input->post('country'),
    'sent_address'=>$this->input->post('sent_address'),
    'address'=>$this->input->post('address'),
    'password'=>sha1($this->input->post('password')),
     'phone_no'=>$this->input->post('phone_no'),
  );
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
  $data=array(
    'name'=>$this->input->post('name'),   
    'surname'=>$this->input->post('surname'),   
    'email'=>$this->input->post('email'),   
    'creditcard'=>$this->input->post('creditcard'),   
    'birthday'=>$this->input->post('birthday'),
    'country'=>$this->input->post('country'),
    'sent_address'=>$this->input->post('sent_address'),
    'address'=>$this->input->post('address'),
    'username'=>$this->input->post('username'),
    'password'=>sha1($this->input->post('password')),
     'phone_no'=>$this->input->post('phone_no'),
     'start_banned'=>$this->input->post('start_banned'),
     'banned_duration'=>$this->input->post('banned_duration'),
     'banned_reason'=>$this->input->post('banned_reason'),
     'penalty_count'=>$this->input->post('penalty_count'),
  );
  $this->db->insert('users',$data);
 }
}
?>