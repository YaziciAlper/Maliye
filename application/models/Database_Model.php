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

        public function kullanici_ekle($tablo,$data){

           $result = $this->db->insert($tablo,$data);
           return $result;




        }

        public function kullanici_sil($id,$table){
          $this->db->where('id', $id);
          return $this->db->delete($table);




          //kayıt Varsa

        }

        public function kullanici_getir($id,$tablo){

          $this->db->select("*");
          $this->db->from($tablo);
          $this->db->where('id', $id);
          $query = $this->db->get();
          return $query->result();
        }

        public function kullanici_guncelle($id,$tablo,$data){

          $this->db->where('id', $id);  //Hangi satırın güncelleneceği belirleniyor.
          $this->db->set('guncellenme_tarihi', 'DATE_ADD(NOW(), INTERVAL 1 MINUTE)', FALSE);
		      return $this->db->update($tablo, $data); //Güncelleme yapılıyor.


        }


}











 ?>
