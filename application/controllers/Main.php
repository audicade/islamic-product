<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('BisnisModel');
		$this->load->database();
	}

	public function index()
	{
		// $lib['data']= $this->BisnisModel->getTesti()->result();
		$this->load->view('templates/header');
		// $this->load->view('landing_bisnis',$lib);
		$this->load_bisnis();
		$this->load->view('templates/footer');
	}

	public function produk()
	{
		$this->load->view('templates/header');
		// $this->load->view('landing_bisnis');
		$this->load_produk();
		$this->load->view('templates/footer');
	}

	public function tambahTesti()
	{
		$config['upload_path']          = './assets/uploads';
		$config['allowed_types']        = 'png|jpg|jpeg|osx|HEIF|HEVC|HEIC';
		$config['max_size']             = 250000;
		$config['max_width'] 			= '2560';
		$config['max_height'] 			= '2048';
		

		$this->upload->initialize($config);
		$this->form_validation->set_rules('namaP', 'Nama Pelanggan', 'trim|required');
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('bisnis', 'Form belum lengkap!');
				redirect('main');	
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('bisnis', 'Gagal Upload!');
				redirect('main');	

		   } else {
			   $namaBerkas = $this->upload->data("file_name");
			   $this->BisnisModel->uploadTesti($namaBerkas);
			   $this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('main');
		   }	
		}
	}

	public function load_testi(){
		$lib['data']= $this->BisnisModel->getTesti()->result();
		return $lib;
	}
	public function load_getURL(){
		$name = $this->input->get('agen');
		if ($name == NULL){
			$name = "Ilham Darussalam";
		}
		return $name;
	}
	public function load_agen($nama){
		$agen['agen'] = $this->BisnisModel->getAgen($nama)->result();
		return $agen;
	}
	public function load_api($pesan_masuk){
		$name = $this->load_getURL();
		$agen = $this->load_agen($name);
		$pesan = $pesan_masuk;
		foreach ($agen['agen'] as $row){
			$telp = $row->no_telp;
		}
		$whatsapp = "http://api.whatsapp.com/send?";
		$api = $whatsapp."phone=".$telp."&text=".$pesan;
		return $api;
	}
	public function load_pesan_bisnis(){
		$pesan = "Test%20auto%20chat%20web%20Islamic";
		return $pesan;
	}
	public function load_pesan_produk(){
		$pesan = "Test%20auto%20chat%20web%20Islamic";
		return $pesan;
	}
	public function load_bisnis(){
		$data = $this->load_testi();
		$api = $this->load_api($this->load_pesan_bisnis());
		$lib['testi'] = $data;
		$lib['api'] = $api;
		$this->load->view('landing_bisnis',$lib);
	}

	public function load_produk(){
		$lib['testi'] = $this->load_testi();
		$lib['api'] = $this->load_api($this->load_pesan_produk());
		$this->load->view('landing_produk',$lib);
	}


}
