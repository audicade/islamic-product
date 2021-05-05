<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bisnis extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('BisnisModel');
		$this->load->database();
	}

	public function index()
	{
		$type = "A";
		$data['agent']= $this->BisnisModel->getAgent($type);
		
		$this->load->view('templates/header');
		$this->load->view('templates/modal', $data);
		$this->load_bisnis();
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
			redirect('bisnis');	
		} else {
			if(!$this->upload->do_upload('UploadFoto')) {
				$this->session->set_flashdata('bisnis', 'Gagal Upload!');
				redirect('bisnis');
		   } else {
				$namaBerkas = $this->upload->data("file_name");
				$this->BisnisModel->uploadTesti($namaBerkas);
				$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('bisnis');
		   }	
		}
	}

	public function tambahAgent()
	{
		$this->form_validation->set_rules('kodeB', 'Kode Agent', 'trim|required');
		$this->form_validation->set_rules('namaB', 'Nama Agent', 'trim|required');
		$this->form_validation->set_rules('noTelpB', 'No Telp Agent', 'trim|required');
		$this->form_validation->set_rules('domisiliB', 'Domisili', 'trim|required');

		$landingTambah = $this->input->post('landingTambah');
		$route = substr($landingTambah,33,6);
		
		if ($this->form_validation->run() == false) {
			if ($route == "bisnis" || $route == "") {
				$this->session->set_flashdata('bisnis', 'Gagal Ditambahkan Pastikan Data Terisi Dengan Benar');
				redirect('bisnis');	
			} else if ($route == "produk") {
				$this->session->set_flashdata('bisnis', 'Gagal Ditambahkan Pastikan Data Terisi Dengan Benar');
				redirect('produk');	
			} else {
				echo $route;
			}
			
		} else {
			if ($route == "bisnis" || $route == "") {
				$this->BisnisModel->insertAgent();
				$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('bisnis');	
			} else if ($route == "produk") {
				$this->BisnisModel->insertAgent();
				$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('produk');
			} else {
				echo $route;
			}
			
		}
	}

	public function ubahAgent()
	{

		$this->form_validation->set_rules('kodeA', 'Kode Agent', 'trim|required');
		$this->form_validation->set_rules('namaA', 'Nama Agent', 'trim|required');
		$this->form_validation->set_rules('noTelpA', 'No Telp Agent', 'trim|required');
		$this->form_validation->set_rules('domisiliA', 'Domisili', 'trim|required');

		$landingUbah = $this->input->post('landingUbah',true);
		$route = substr($landingUbah,33,6);
	
		if ($this->form_validation->run() == false) {
			if ($route == "bisnis" || $route == "") {
				$this->session->set_flashdata('bisnis', 'Gagal Dirubah Pastikan Data Terisi Dengan Benar');
				redirect('bisnis');	
			} else if ($route == "produk") {
				$this->session->set_flashdata('bisnis', 'Gagal Dirubah Pastikan Data Terisi Dengan Benar');
				redirect('produk');		
			}
			
		} else {
			if ($route == "bisnis" || $route == "") {
				$this->BisnisModel->updateAgent();
				$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('bisnis');
			} else if ($route == "produk") {
				$this->BisnisModel->updateAgent();
				$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
				redirect('produk');		
			}
			
					
		}
	}

	public function getInfoAgent()
   {
	echo json_encode($this->BisnisModel->getAgentById($_POST['id']));
   }

	public function hapusAgent($kode)
    {

	$id = substr($kode,0,1);

		if ($id == "A") {
			$this->BisnisModel->hapusDataAgent($kode);
			$this->session->set_flashdata('bisnis', 'Berhasil Dihapus');
			redirect('bisnis');
		} else if ($id == "B") {
			$this->BisnisModel->hapusDataAgent($kode);
			$this->session->set_flashdata('bisnis', 'Berhasil Dihapus');
			redirect('produk');		
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
		$pesan = "Halo%20Kak%20".$this->load_getURL().".%20Tolong%20bantu%20saya%20meraih%20sukses!!";
		return $pesan;
	}
	public function load_bisnis(){
		$data = $this->load_testi();
		$api = $this->load_api($this->load_pesan_bisnis());
		$lib['testi'] = $data;
		$lib['api'] = $api;
		$this->load->view('landing_bisnis',$lib);
	}

}