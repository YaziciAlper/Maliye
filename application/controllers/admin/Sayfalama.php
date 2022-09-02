<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sayfalama extends CI_Controller {

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
		$this->load->library("pagination"); //Sayfalama kütüphanesi sayfaya yüklendi
		$this->load->model("Sayfalama_Model");
		$this->load->helper("url");
		$config['uri_segment'] =4;
		$config['per_page'] = 4; // Sayfa Başına ka. kayıt gösterilecek
		$config['total_rows'] = $this->Sayfalama_Model->toplam_kayit(); // tablodaki toplm kayıt sayısı

		//Html tarafındaki tagları ayarlıyoruz
		$config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li class="page-link">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev page-link">';  //buradaki ayarlar sayfalama linki
    $config['prev_tag_close'] = '</li>';             //görünüm ayarları
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-link">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-link">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active page-link"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-link">';
    $config['num_tag_close'] = '</li>';

		$config['base_url'] = base_url()."admin/sayfalama/index";
		$config['use_page_number'] = TRUE;
		$this->pagination->initialize($config); // Yapılan ayarları kaydet
		$data["linkler"] = $this->pagination->create_links();
		$sayfa = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


		if($sayfa > 0){
			$offset = $sayfa;
		}else{
			$offset = $sayfa;
		}

		$data["veriler"] = $this->Sayfalama_Model->listele($config['per_page'], $offset);  // Modelimiz içerisinde oluşturduğumuz listele metoduna kaç tane veri gösterileceğini ve kaçıncı veriden başlıyacağını yazıyoruz.
		$this->load->view("admin/kullanici_liste",$data);


	}



}
