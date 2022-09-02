<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code


								//session var mı diye kontrol ediyoruz
								//yoksa login sayfasına yönlendiriyoruz

								if(!$this->session->userdata("admin_session")){
									redirect(base_url().'admin/login');
								}
        }

	public function index()
	{
		//databse bodeline bağlanıp kullanıcılar tablosundan verileri aldık
		$this->load->model('Database_Model');
		$data["veriler"]=$this->Database_Model->kullanici_liste('kullanicilar');


		$this->load->view('admin/kullanici_liste',$data);

	}

	public function ekle(){

		$this->load->view('admin/kullanici_ekle');


	}
	public function kullanici_ekle(){

		$data=array(
             'adsoy'=>$this->input->post('adsoy'),      //Formdan Verileri alıyoruz.
             'email'=>$this->input->post('email'),
             'gorev'=>$this->input->post('gorev'),
					 	 'email'=>$this->input->post('email'),
					 	 'telefon'=>$this->input->post('telefon'));

	 $tablo = "kullanicilar";
	 $this->load->model('Database_Model');
	 $result=$this->Database_Model->kullanici_ekle($tablo,$data);

	 if( $result){
		 $this->session->set_flashdata("mesaj","Kullanıcı Başarılı Bir Şekilde Eklendi");
		 redirect(base_url().'admin/Sayfalama');
	 }else{
		 $this->session->set_flashdata("mesaj","Kullanıcı Eklenemedi");
		 redirect(base_url().'admin/Sayfalama');
	 }

	}

	public function kullanici_sil($id){

		$this->load->model('Database_Model');
		$data = $this->Database_Model->kullanici_sil($id,"kullanicilar");

		if( $data){
			$this->session->set_flashdata("mesaj","Kullanıcı Başarılı Bir Şekilde Silindi");
 		 redirect(base_url().'admin/Sayfalama');
		}else{
			$this->session->set_flashdata("mesaj","Hata Kullanıcı Silinemedi!!!");
 		 redirect(base_url().'admin/Sayfalama');
		}
	}

	public function guncelle($id){
	 $tablo = "kullanicilar";
 	 $this->load->model('Database_Model');
 	 $data["veri"]=$this->Database_Model->kullanici_getir($id,$tablo);




		$this->load->view('admin/kullanici_guncelle',$data);
	}


	public function kullanici_guncelle($id){

		$data=array(
             'adsoy'=>$this->input->post('adsoy'),      //Formdan Verileri alıyoruz.
             'email'=>$this->input->post('email'),
             'gorev'=>$this->input->post('gorev'),
					 	 'email'=>$this->input->post('email'),
						 'durum'=>$this->input->post('durum'),
					 	 'telefon'=>$this->input->post('telefon'));

	 $tablo = "kullanicilar";
	 $this->load->model('Database_Model');
	 $data=$this->Database_Model->kullanici_guncelle($id,$tablo,$data);

	 if( $data){
		 $this->session->set_flashdata("mesaj","Kullanıcı Başarılı Bir Şekilde Güncellendi");
		redirect(base_url().'admin/Sayfalama');
	 }else{
		 $this->session->set_flashdata("mesaj","Hata Kullanıcı Güncellenemedi!!!");
		redirect(base_url().'admin/Sayfalama');
	 }
	}






}
