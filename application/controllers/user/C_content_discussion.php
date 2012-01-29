<?php

class C_content_discussion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('bt_model');
    }

    function index() {
        $query['data']=$this->bt_model->ambilkomentar();
         $data['title']="discussion";
        $this->load->view('header/header',$data);
        $this->load->view('content/content_discussion',$query);
        $this->load->view('footer/footer');
    }

}

?>