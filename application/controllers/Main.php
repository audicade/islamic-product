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
		$this->load->view('templates/header');
		// $this->load->view('landing_bisnis');
		$this->load_testi();
		$this->load->view('templates/footer');
	}

	public function tambahTesti()
	{
		$config['upload_path']          = '../assets/uploads';
		$config['allowed_types']        = 'png|jpg';
		$config['max_size']             = 10000;
		$config['max_width'] 			= '1920';
		$config['max_height'] 			= '1080';
		

		$this->upload->initialize($config);
		$this->form_validation->set_rules('namaP', 'Nama Pelanggan', 'trim|required');
		
		//$this->upload->initialize($config);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('bisnis', 'Gagal Upload!');
				redirect('main');	
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('bisnis', 'Requirement Terlampaui!');
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
		$this->load->view('landing_bisnis',$lib);
	}



}
