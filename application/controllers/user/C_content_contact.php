<?php
class C_content_contact extends CI_Controller{
    function __construct() {
        parent::__construct();
    }

    function index(){
        $this->load->view('header/header');
        $this->load->view('content/content_contact');
        $this->load->view('footer/footer');
    }
}

?>
