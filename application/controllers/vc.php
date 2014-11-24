<?php
class VC extends CI_Controller {

	// Access this controller from http://localhost/buydo/index.php/vc/
	public function index($page){
		$this->load->view('sample_view/main.html');
	}

	// Access this function from http://localhost/buydo/index.php/vc/show/<$folder>/<$page>
	// i.e. http://localhost/buydo/index.php/vc/show/content/sample
	

	public function show($folder, $page){
		if($folder=='user'||$folder=='seller'||$folder=='checkout') $data['template_type'] = "corperate";
		else $data['template_type'] = "ecommerce";
		$this->load->view('header/header', $data);
		$this->load->view($folder.'/'.$page);
		$this->load->view('footer/footer');
		//$this->load->model('admin_model');

		//echo "hello world";
		//$this->admin_model->addAdmin(5);
      // $data['page_title'] = $page;
      // $this->load->view('header');
      // echo $page;
      // //$this->load->view('content', $data);
      // $this->load->view('footer');
	}
	public function sendEmail(){
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'pladookspiral@gmail.com', // change it to yours
			'smtp_pass' => 'pladookmasta', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

        $message = 'HELLO BUYDOER LOLOLOLOL';
        $this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('pladookspiral@gmail.com'); // change it to yours
		$this->email->to('nontawat.mk@gmail.com');// change it to yours
		$this->email->subject('There is one secret in this world');
		$this->email->message($message);
		if($this->email->send()){
			echo 'Email sent.';
		}
		else{
			show_error($this->email->print_debugger());
    
		}
	}

	public function showSystemComplain(){
		$this->load->model('complain_model');
		$this->load->model('user_model');
		//$this->load->model('complain_model');
		//$userid = 6;
		$complain = $this->complain_model->getAllComplain();
		//$data['username'] = $this->user_model->getNameByUserID($userid);
		//var_dump($feedbacks);	
		//$name_of_user = $this->user_model->getNameByUserID($userid);
		
		$data = array();
		$predata = array();
		$size = 0;
		foreach($complain as $row){
			$narray = array(
				array(
					"user_id"=>$row['user_id'],
          			"complainer"=>$this->user_model->getNameByUserID($row['user_id']),
          			"accused"=>$row['accused'],
          			"date"=>$row['date'],
          			"topic"=>$row['topic'],
          			"detail"=>$row['detail'],
          			"type"=>$row['type']
				)
			);
			$predata = array_merge($predata, $narray);
			$size = $size + 1;
		}
		//$data['title'] = "View Feedback";
		$data = array_merge(array("sendarray"=>$predata), array("size"=>$size));

		// var_dump($data);
		$this->load->view('header/header',$data);
   		$this->load->view("item/complain_info.php",$data);
   		$this->load->view('footer/footer',$data);	
	}

}

?>
