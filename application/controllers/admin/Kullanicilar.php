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



}
