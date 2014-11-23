<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feedback_model extends CI_Model {

	/* private $_complainID;
	private $_userID;
	private $_complainant;
	private $_accused;
	private $_date;
	private $_topic;
	private $_category;
	private $_detail;*/ 

	private $table_name;
	private $attributes = "feedback_id, transaction_id, feedback_from, feedback_to, score, comment";

	public function addFeedback($transactionID,$feedbackFrom, $feedbackTo, $score, $comment){
		$insvalue = "('".
			
			$transactionID."', '".
			$feedbackFrom."', '".
			$feedbackTo."', '".
			$score."', '".
			$comment."')";

		$sql = "INSERT INTO feedbacks ($this->attributes) VALUES ".$insvalue;
		$query = $this->db->query($sql);
		if($query > 0){
			return true;
		}
		return false;
	}

	function __construct(){
		parent::__construct();
		$this->table_name = "feedbacks";
	}

	function test(){
		return $this->db->query("SELECT * FROM feedbacks");
	}
	function getFeedbackByFeedbackID($id){
		return $this->db->query("SELECT * FROM feedbacks WHERE feedback_id = ".$id);
	}
	function getFeedbackByUserID($id){
		return $this->db->query("SELECT * FROM feedbacks WHERE feedbackFrom = ".$id." OR feedbackTo = ".$id);
	}


}
?>