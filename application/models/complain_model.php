<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Complain_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "user_id, accused, topic, category, detail";

	public function addComplain($userID,$accused, $topic, $category, $detail){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$userID."', '".
			$accused."', '".
			$topic."', '".
			$category."', '".
			$detail."')";
		$sql = "INSERT INTO complain ($attributes) values ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	public function add_complain(){

		 $data=array(
			'user_id' =>$this->session->userdata('user_id'),
			'date'=>date('Y-m-d'),
			'topic'=>$this->input->post('topic'),
			//'category'=>$this->input->post('category'),
			'detail'=>$this->input->post('detail'),
		  );

		 $check = $this->db->insert('complain',$data);
		 if($check)return true;
		 else return false;
		  
	}	

		public function add_complain_user($accusedID){
		 $data=array(
		'user_id' =>$this->session->userdata('user_id'),
		'accused'=>$accusedID,
		'date'=>date('Y-m-d'),
		'topic'=>$this->input->post('topic'),
		'detail'=>$this->input->post('detail'),
		);
		  $this->db->insert('complain',$data);
	}	

	function __construct(){
		parent::__construct();
		$this->table_name = "complain";
	}

	function test(){
		return $this->db->query("SELECT * from complain");
	}
	function get_complain_by_id($id){
		return $this->db->query("SELECT * from complain where `id`=".$id);
	}

	function sent_complain($user_id, $accused, $topic, $category, $detail){
		return $this->db->query("INSERT INTO `buydo`.`complain` (`complaint_id` ,`user_id` ,`accused` ,`date` ,`topic` ,`category` ,`detail`)VALUES (NULL , '".$user_id."', '".$accused."',CURRENT_TIMESTAMP , '".$topic."', '".$category."', '".$detail."')");
	}

	//commit the object in php to a tuple in database

	/*public function commit(){
		$data = array(
			'complainID' => $this->_complainID;
			'userID' => $this->_userID;			
			'complainant' => $this->_complainant;
			'accused' => $this->_accused;
			'date' => $this->_date;
			'topic' => $this->_topic;
			'category' => $this->_category;
			'detail' => $this->_detail;			
			);

		if($this->_complainID > 0){	//user already exists, just update user info
			if ($this->db->update("Item", $data, array("complainID" => $this->_complainID))) {
				return true;
			}

		}
		else {	//user doesn't exist, create new user
			if ($this->db->insert("Item", $data)) {
				//Now we can get the ID and update the newly created object
				$this->_complainID = $this->db->insert_id();
				return true;
			}

		}
	}

	public function getComplainID(){
		return $this->_complainID;
	}

	public function setComplainID($complainID){
		$this->_complainID = $complainID;
	}

	public function getUserID(){
		return $this->_userID;
	}

	public function setUserID($userid){
		$this->_userID = $userid;
	}
	public function getDate(){
		return $this->_date;
	}

	public function setDate($date){
		$this->_date = $date;
	}
	public function getComplainant(){
		return $this->_complainant;
	}

	public function setComplainant($complainant){
		$this->_complainant = $complainant;
	}
	public function getAccused(){
		return $this->_accused;
	}

	public function setAccused($accused){
		$this->_accused = $accused;
	}
	public function getTopic(){
		return $this->_topic;
	}

	public function setTopic($topic){
		$this->_topic = $topic;
	}
	public function getCategory(){
		return $this->_category;
	}

	public function setCategory($category){
		$this->_category = $category;
	}
	public function getDetail(){
		return $this->_detail;
	}

	public function setDetail($detail){
		$this->_detail = $detail;
	}

}*/
}
?>
