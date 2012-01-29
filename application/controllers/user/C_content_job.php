<?php

class C_content_job extends CI_Controller{
    function __construct() {
        parent::__construct();
    }

    function index(){
        $data['title']="job";
        $this->load->view('header/header',$data);
        $this->load->view('content/content_job');
        $this->load->view('footer/footer');
    }
}


?>