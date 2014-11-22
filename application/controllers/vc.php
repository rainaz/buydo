<?php
class VC extends CI_Controller {

	// Access this controller from http://localhost/buydo/index.php/vc/
	public function index($page)
	{
		$this->load->view('sample_view/main.html');
	}

	// Access this function from http://localhost/buydo/index.php/vc/show/<$folder>/<$page>
	// i.e. http://localhost/buydo/index.php/vc/show/content/sample
	

	public function show($folder, $page)
	{
		if($folder=='user'||$folder=='seller') $data['template_type'] = "corperate";
		else $data['template_type'] = "ecommerce";
		$this->load->view('header/header', $data);
		$this->load->view($folder.'/'.$page);
		$this->load->view('footer/footer');
		$this->load->model('admin_model');
		echo "hello world";
		//$this->admin_model->addAdmin(5);
      // $data['page_title'] = $page;
      // $this->load->view('header');
      // echo $page;
      // //$this->load->view('content', $data);
      // $this->load->view('footer');
	}

}
?>
