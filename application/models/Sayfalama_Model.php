<?php

class Sayfalama_Model extends CI_Model {




        public function toplam_kayit(){

          return $this->db->count_all_results("kullanicilar"); //kulanıcılar tablosunda ki veri sayısı



        }

        public function listele($limit,$start){

          $this->db->limit($limit, $start); // Metoda gelen parametreler ile limit değerlerini gir ve sayfalamaya göre veri getir
      		$veriler = $this->db->get("kullanicilar"); // Veriler tablosunu çek
      		return $veriler->result();  // Sonuçları döndür



        }



}











 ?>
