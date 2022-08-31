<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
								$this->load->database();
        }

	public function index()
	{
		$this->load->view('admin/login_form');

	}

	public function login_ol()
	{

		//inputtan gelen verileri alıyoruz
		$email 		= $this->input->post("email");
		$password = $this->input->post("password");

		//zararlı kodlardan kurtulma

		$email 		=$this->security->xss_clean($email);
		$password 	=$this->security->xss_clean($password);

		//db modeli çağırıyoruz

		$this->load->model('Database_Model');

		//oluşturduğumuz admin tablosuna bağlantı için
		$result = $this->Database_Model->login("admin",$email,$password);

		if($result){

			//kullanıcı bilgilerini çek

			$sess_array = $arrayName = array(
				'id' => $result[0]->id ,
				'email' => $result[0]->email ,
				'password' => $result[0]->password ,
				'durum' => $result[0]->durum ,
				'adsoy' => $result[0]->adsoy ,
				'resim' => $result[0]->resim ,
			);

			//session oluştur

			$this->session->set_userdata('admin_session',$sess_array);
			redirect(base_url().'admin/home');

		}else{
			$this->session->set_flashdata("mesaj","Hatalı Kullanıcı Bilgileri");
			redirect(base_url().'admin/login');
		}

	}

	//session yok etme
	public function login_cikis(){

		$this->session->unset_userdata('admin_session');
		redirect(base_url().'admin/login');

	}


}
