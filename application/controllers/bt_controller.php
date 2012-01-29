<?php
class Bt_controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('bt_model');
    }
    function index(){
        $query['data']=$this->bt_model->ambilkomentar();
        $data['title']="buku tamu";
        $this->load->view('header/header',$data);
        $this->load->view('content/content_discussion',$query);
        $this->load->view('footer/footer');
    }
    function tambah(){
        $this->bt_model->tambahkomentar();
        $this->index();
    }
    function hapus($id){
        $this->db->delete('isi',array('id'=>$this->url->segment(3)));
        redirect('','refresh');
    }
//    function ubah(){
//        $data['title']="ubah buku tamu";
//        $this->load->view('user/v_header',$data);
//        $this->load->view('user/frontend/v_header_top');
//        $this->load->view('user/frontend/v_menu');
//        $this->load->view('user/frontend/bukutamu/buku_tamu_ubah');
//        $this->load->view('user/v_footer');
//    }
    function tempel(){
        $id=$this->url->segment(3);
        $username=$this->input->post('username');
        $komenter=$this->input->post('komentar');
        $data=array(
            'username'=>$username,
            'komentar'=>$komenter
        );
        $this->db->where('id',$id);
        $this->db->update('isi',$data);
        redirect('/bt_controller/','refresh');
    }
}
?>
