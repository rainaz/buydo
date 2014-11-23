<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller{

    public function __construct(){
        parent::__construct();

    }

    public function index()
    {
        $data['template_type'] = "ecommerce";
        $this->load->view('header/header', $data);
        $this->load->view('page/home');
        $this->load->view('footer/footer');

    }
}
?>