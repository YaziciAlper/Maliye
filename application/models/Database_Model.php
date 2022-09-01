<?php

class Database_Model extends CI_Model {




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

        public function kullanici_liste($tablo){

          $this->db->select("*");
          $this->db->from($tablo);
          $this->db->order_by("adsoy", "asc");
          $query = $this->db->get();
          return $query->result();



        }

}











 ?>
