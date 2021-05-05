<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('BisnisModel');
		$this->load->database();
	}

	public function index()
	{
		$type = "B";
		$data['agent']= $this->BisnisModel->getAgent($type);

		$this->load->view('templates/header');
		$this->load->view('templates/modal', $data);
		// $this->load->view('landing_bisnis');
		$this->load_produk();
		$this->load->view('templates/footer');
	}

	public function tambahTesti()
	{
		$config['upload_path']          = './assets/uploads';
		$config['allowed_types']        = 'png|jpg|jpeg|bmp|jpe|jpg2|svg|ico';
		$config['max_size']             = 250000;
		$config['max_width'] 			= '2560';
		$config['max_height'] 			= '2048';
		
		$this->upload->initialize($config);
		$this->form_validation->set_rules('namaP', 'Nama Pelanggan', 'trim|required');
		
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('bisnis', 'Form belum lengkap!');
			redirect('produk');
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('bisnis', 'Gagal Upload!');
				redirect('produk');
		   } else {
				$namaBerkas = $this->upload->data("file_name");
				$this->BisnisModel->uploadTestiP($namaBerkas);
				$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('produk');
			}
		}	
	}

	public function getInfoAgent()
   {
	echo json_encode($this->BisnisModel->getAgentById($_POST['id']));
   }

	public function load_testiP()
	{
		$lib['data']= $this->BisnisModel->getTestiP()->result();
		
		return $lib;
	}

	public function load_getURL()
	{
		$name = $this->input->get('agen');
		if ($name == NULL){
			$name = "Ilham Darussalam";
		}
		return $name;
	}

	public function load_agen($nama)
	{
		$agen['agen'] = $this->BisnisModel->getAgen($nama)->result();
		return $agen;
	}

	public function load_api($pesan_masuk)
	{
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

	public function load_pesan_produk()
	{
		$pesan = "Halo%20Kak%20".$this->load_getURL().",%20Saya%20ingin%20memesan%20produk%20ajaib%20British%20Propolis";
		return $pesan;
	}

	public function load_produk()
	{
		$lib['testi'] = $this->load_testiP();
		$lib['api'] = $this->load_api($this->load_pesan_produk());
		$this->load->view('landing_produk',$lib);
	}

}