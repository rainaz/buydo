<?php
class Email_library{
	public function sendEmail($destinationAddress, $subject, $message){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'buydonoreply@gmail.com', // change it to yours
			'smtp_pass' => 'netrakom', // change it to yours
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'wordwrap' => TRUE
		);

        $message = $message;
		$CI =& get_instance();

		$CI->load->library('email', $config);
		$CI->email->set_newline("\r\n");
		$CI->email->from($config['smtp_user']); // change it to yours
		$CI->email->to($destinationAddress);// change it to yours
		$CI->email->subject($subject);
		$CI->email->message($message);
		if($CI->email->send()){
			echo 'Email sent.';
		}
		else{
			show_error($CI->email->print_debugger());
    
		}
	}
}



?>
