<?php

class C_home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title']="home";
        $this->load->view('header/header',$data);
        $this->load->view('content/content_home');
        $this->load->view('footer/footer');
    }

}

?>
