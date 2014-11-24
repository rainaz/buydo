<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Item_model extends CI_Model {

	private $table_name;
	private $attributes = "item_id, item_name, posted_date, agreement, status, spec,owner_id,picture";

	function __construct() {
		parent::__construct();
		$this->table_name = "items";
	}

	public function addItem_($itemName, $agreement, $status, $spec, $ownerID, $picture) {

		$lastrow = $this->db->count_all($this->table_name) + 1;
		if ($ownerID == NULL) {
			$ownerID = "1";
		}

		//$ownerID = "5";
		$insvalue = "('" . $lastrow . "', '" .
		$itemName . "', '" .

		date('Y-m-d') . "', '" .

		$agreement . "', '" .
		$status . "', '" .
		$spec . "', '" .
		$ownerID . "', '" .
		$picture . "')";

		$sql = "INSERT INTO items ($this->attributes) VALUES " . $insvalue;
		//echo "\n$sql";
		//$query = $this->db->query($sql);
		if ($query > 0) {
			//echo $query;
			return $lastrow;
		}
		return false;
	}

	public function getItemStatusByItemID($id){
		$query = $this->db->query("SELECT status FROM items WHERE item_id = '" . $id . "'");
		return $query->row()->status;
	}

	public function getItemNameByItemID($id){
		$query = $this->db->query("SELECT item_name FROM items WHERE item_id = '" . $id . "'");
		return $query->row()->item_name;
	}

	public function getItemByID($id) {
		$query = $this->db->query("SELECT * FROM items WHERE item_id = '" . $id . "'");
		if ($query->num_rows() > 0) {
			return $query->row();
		}
		return false;
	}

	public function setItemStatus($itemid, $nstatus){
		$sql = "UPDATE items SET status = "."'".$nstatus."'"." WHERE item_id = "."'".$itemid."'";
		$query = $this->db->query($sql);		
	}
//commit the object in php to a tuple in database
	public function addItem() {
		$today = date('Y-m-d');
		$data = array(
			'item_name' => $this->input->post('item_name'),

			'agreement' => $this->input->post('agreement'),

			'posted_date' => $today,
			'status' => "in_stock",
			'spec' => $this->input->post('spec'),

			'picture' => $this->input->post('picture'),

			'owner_id' => $this->input->post('owner_id'),
		);
		echo $data['item_name'] . " " . $data['picture'] . "\n";
		$query = $this->db->insert('items', $data);
		echo "query = $query\n";
		$insertid = $this->db->insert_id();
		return $insertid;
	}
	public function editItem() {
		$this->load->helper('url');

		$data = array(

			'item_name' => $this->input->post('item_name'),

			'agreement' => $this->input->post('agreement'),

			'status' => "in_stock",
			'spec' => $this->input->post('spec'),

			'picture' => $this->input->post('picture'),

		);
		$this->db->where('item_id', $this->input->post('item_id'));
		return $this->db->update('items', $data);
	}

	public function searchItem($search, $page, $per_page) {
		$totalRow = $this->db->query("SELECT count(*) AS count FROM (SELECT `a`.`item_id`, `a`.`item_name`, `a`.`picture`, `b`.`current_price` AS `price`, 'bid' AS `item_type` FROM `items` AS `a` INNER JOIN `bid_items` AS `b` ON `a`.`item_id`=`b`.`item_id`WHERE (`a`.`item_name` REGEXP '.*" . $search . ".*') AND `b`.`end_date` >  '" . ((new DateTime())->format("Y-m-d H:i:s")) . "' UNION SELECT `a`.`item_id`, `a`.`item_name`, `a`.`picture`, `b`.`price` AS `price`, 'sale' AS `item_type` FROM `items` AS `a` INNER JOIN `sale_items` AS `b` ON `a`.`item_id`=`b`.`item_id`WHERE (`a`.`item_name` REGEXP '.*" . $search . ".*') AND `b`.`quantity_in_stock` > 0 ) AS `r`;");
		if(!$totalRow)
			return false;
		$query = $this->db->query("SELECT `a`.`item_id`, `a`.`item_name`, `a`.`picture`, `b`.`current_price` AS `price`, 'bid' AS `item_type` FROM `items` AS `a` INNER JOIN `bid_items` AS `b` ON `a`.`item_id`=`b`.`item_id`WHERE (`a`.`item_name` REGEXP '.*" . $search . ".*') AND `b`.`end_date` > '" . ((new DateTime())->format("Y-m-d H:i:s")) . "' UNION SELECT `a`.`item_id`, `a`.`item_name`, `a`.`picture`, `b`.`price` AS `price`, 'sale' AS `item_type` FROM `items` AS `a` INNER JOIN `sale_items` AS `b` ON `a`.`item_id`=`b`.`item_id`WHERE (`a`.`item_name` REGEXP '.*" . $search . ".*') AND `b`.`quantity_in_stock` > 0 LIMIT " . (($page - 1) * $per_page) . "," . ($page * $per_page) . ";");
		

		return array("total" => $totalRow->first_row()->count, "data" => $query);
	}
	public function searchBidItem($search) {
		$query = $this->db->query("SELECT `a`.`item_id`, `a`.`item_name`, `a`.`picture`, `b`.`current_price` AS `price`, 'bid' AS `item_type` FROM `items` AS `a` INNER JOIN `bid_items` AS `b` ON `a`.`item_id`=`b`.`item_id`WHERE (`a`.`item_name` REGEXP '.*" . $search . ".*') AND `b`.`end_date` > DATE '" . ((new DateTime())->format("Y-m-d H:i:s")) . "';");
		if ($query->num_rows() <= 0) {
			return false;
		}

		return $query;
	}
	public function searchSaleItem($search) {
		$query = $this->db->query("SELECT `a`.`item_id`, `a`.`item_name`, `a`.`picture`, `b`.`price` AS `price`, 'sale' AS `item_type` FROM `items` AS `a` INNER JOIN `sale_items` AS `b` ON `a`.`item_id`=`b`.`item_id`WHERE (`a`.`item_name` REGEXP '.*" . $search . ".*') AND `b`.`quantity_in_stock` > 0;");
		if ($query->num_rows() <= 0) {
			return false;
		}

		return $query;
	}
	
	public function getItemInfoNotClosed($id) {
		$isBid = $this->db->query("SELECT * FROM `bid_items` WHERE `bid_items`.`item_id`=" . $id . ";")->num_rows();
		if ($isBid > 0) {
			$query = $this->db->query("SELECT `a`.`item_name`,`b`.`current_winner_id`, `a`.`agreement`, `a`.`status`, `a`.`spec`, `b`.`end_date`, `b`.`initial_price`, `b`.`current_price`, `a`.`picture`  FROM `items` AS `a` INNER JOIN `bid_items` AS `b` ON `a`.`item_id`=`b`.`item_id` AND `a`.`item_id`=" . $id . " AND a.status='bidding';")->first_row();
			if(!$query)
				return false;
			$timeLeft = (new DateTime($query->end_date))->diff(new DateTime());
			$data = array(
				"type" => "Auction",
				"itemName" => $query->item_name,
				"initialPrice" => $query->initial_price,
				"currentPrice" => $query->current_price,
				"timeLeft" => $timeLeft->format("%Y-%m-%d %H:%i:%s"),
				"isClose" => $timeLeft->format("%R") == "+",
				"status" => $query->status,
				"winnerID"=>$query->current_winner_id,
				"spec" => $query->spec,
				"agreement" => $query->agreement,
				"nextBid" => $query->current_price + $query->initial_price * 0.05,
				"picURL" => $query->picture,
				"end_date" => $query->end_date
			);
			return $data;
		} 
		return false;
	}


	public function getItemInfo($id) {
		$isBid = $this->db->query("SELECT * FROM `bid_items` WHERE `bid_items`.`item_id`=" . $id . ";")->num_rows();
		if ($isBid > 0) {
			$query = $this->db->query("SELECT `a`.`item_name`,`b`.`current_winner_id`, `a`.`agreement`, `a`.`status`, `a`.`spec`, `b`.`end_date`, `b`.`initial_price`, `b`.`current_price`, `a`.`picture`  FROM `items` AS `a` INNER JOIN `bid_items` AS `b` ON `a`.`item_id`=`b`.`item_id` AND `a`.`item_id`=" . $id . ";")->first_row();
			$timeLeft = (new DateTime($query->end_date))->diff(new DateTime());
			$data = array(
				"type" => "Auction",
				"itemName" => $query->item_name,
				"initialPrice" => $query->initial_price,
				"currentPrice" => $query->current_price,
				"timeLeft" => $timeLeft->format("%Y-%m-%d %H:%i:%s"),
				"isClose" => $timeLeft->format("%R") == "+",
				"status" => $query->status,
				"winnerID"=>$query->current_winner_id,
				"spec" => $query->spec,
				"agreement" => $query->agreement,
				"nextBid" => $query->current_price + $query->initial_price * 0.05,
				"picURL" => $query->picture,
				"end_date" => $query->end_date
			);
			return $data;
		} else {

			$query = $this->db->query("SELECT `a`.`item_name`, `a`.`agreement`, `a`.`status`,`a`.`spec`, `b`.`price`, `b`.`quantity_in_stock`, `a`.`picture`  FROM `items` AS `a` INNER JOIN `sale_items` AS `b` ON `a`.`item_id`=`b`.`item_id` WHERE `a`.`item_id`=" . $id . ";");
			if ($query->num_rows() != 1) {
				return false;
			}

			$query = $query->first_row();
			$data = array(
				"type" => "Sales",
				"itemName" => $query->item_name,
				"price" => $query->price,
				"quantity" => $query->quantity_in_stock,
				"status" => $query->status,
				"spec" => $query->spec,
				"agreement" => $query->agreement,
				"picURL" => $query->picture,
			);
			return $data;
		}
	}

}
?>
