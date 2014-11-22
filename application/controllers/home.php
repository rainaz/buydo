<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();

    }

    public function index()
    {
        $data['base']=$this->config->item('base_url');
        $data['title']= 'Message form';
        $this->load->view('header_view',$data);
        $this->load->view('messageform_view',$data);
        $this->load->view('footer_view',$data);
    }
    public function insert_message()
    {
        $this->load->model('message_model');
        $this->message_model->add_message();
    }
}
?>