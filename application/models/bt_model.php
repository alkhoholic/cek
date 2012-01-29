<?php
class Bt_model extends CI_Model{
    
    function tambahkomentar(){
        $username = $this->input->post('username');
        $komentar = $this->input->post('komentar');
        $date = date('y.m.d');
        $time = date('H.i.s');
        $data = array(
            'username'=>$username,
            'komentar'=>$komentar,
            'tanggal'=>$date,
            'jam'=>$time
        );
        $this->db->insert('isi',$data);
    }
    function ambilkomentar(){
        $query = $this->db->query('select * from isi order by id asc');
        if($query->num_rows()>0){
            foreach ($query->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }
    function ubahkomentar(){
        $username = $this->input->post('username');
        $komentar = $this->input->post('komentar');
        $data = array(
            'username'=>$username,
            'komentar'=>$komentar,
        );
        $this->db->where('id',$id);
        $this->db->update('isi',$data);
    }
}
?>
