<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Bid_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "bid_id, item_id, buyer_id, current_bid, max_bid, bid_date";

public function addBid($item_id, $buyer_id, $current_bid, $max_bid){
		$lastrow = $this->db->insert_id();	

		$insvalue = "('".$lastrow."', '".
			$feedbackFrom."', '".
			$feedbackTo."', '".			$score."', '".
			$comment."')";

		$sql = "INSERT INTO feedbacks ($attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}
		return false;
	}
	function __construct(){
		parent::__construct();
		$this->table_name = feedbacks;
	}

	function test(){
		return $this->-db->query("SELECT * FROM feedbacks");
	}
	function getFeedbackByFeedbackID($id){
		return $this->db->query("SELECT * FROM feedbacks WHERE feedback_id = ".$id);
	}
	function getFeedbackByUserID($id){
		return $this->db->query("SELECT * FROM feedbacks WHERE feedbackFrom = ".$id." OR feedbackTo = ".$id);
	}

