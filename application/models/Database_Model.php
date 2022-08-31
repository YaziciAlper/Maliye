<?php

class Database_Model extends CI_Model {

        public function blog()
        {
                $this->load->model('blog');

                $data['query'] = $this->blog->get_last_ten_entries();

                $this->load->view('blog', $data);
        }


        //login işlemi
        public function login($tablo,$email,$password){

                $this->db->select("*");
                $this->db->from($tablo);
                $this->db->where('email',$email);
                $this->db->where('password',$password);
                $this->db->where('durum',"aktif");
                $this->db->limit(1);
                $query = $this->db->get();


                //kayıt Varsa
                if($query ->num_rows() == 1){
                  return $query->result();
                }else{
                  return false;
                }


        }
}











 ?>
