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
		$user['agent']= $this->BisnisModel->getAgent();
		// $lib['data']= $this->BisnisModel->getTesti()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/modal', $user);
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
		$config['allowed_types']        = 'png|jpg|jpeg|bmp|jpe|jpg2|svg|ico';
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

	public function tambahAgent()
	{
		
		$this->form_validation->set_rules('kodeB', 'Kode Agent', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('namaB', 'Nama Agent', 'trim|required|alpha');
		$this->form_validation->set_rules('noTelpB', 'No Telp Agent', 'trim|required|integer');
		$this->form_validation->set_rules('domisiliB', 'Domisili', 'trim|required|alpha');
		
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('bisnis', 'Gagal Ditambahkan Pastikan Data Terisi Dengan Benar');
			redirect('main');	
		} else {
			$this->BisnisModel->insertAgent();
			$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
			redirect('main');
		}
	}

	public function ubahAgent()
	{

		$this->form_validation->set_rules('kodeA', 'Kode Agent', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('namaA', 'Nama Agent', 'trim|required|alpha');
		$this->form_validation->set_rules('noTelpA', 'No Telp Agent', 'trim|required|integer');
		$this->form_validation->set_rules('domisiliA', 'Domisili', 'trim|required|alpha');
	
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('bisnis', 'Gagal Dirubah Pastikan Data Terisi Dengan Benar');
			redirect('main');	
		} else {
			$this->BisnisModel->updateAgent();
			$this->session->set_flashdata('bisnis', 'Form Berhasil diUpload');
			redirect('main');
					
		}
	}

	public function getInfoAgent()
   {
	echo json_encode($this->BisnisModel->getAgentById($_POST['id']));
   }

   public function ubahUrl($nama)
   {
		
    	$urlNama =str_replace(' ', '%20', $nama);
		$url ="http://localhost/islamic-product/main?agen=".$urlNama;
    	echo $url;
   }

	public function hapusAgent($id)
    {
		$this->BisnisModel->hapusDataAgent($id);
		$this->session->set_flashdata('bisnis', 'Berhasil Dihapus');
		redirect('main');
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
	public function load_api(){
		$name = $this->load_getURL();
		$agen = $this->load_agen($name);
		$pesan = "Test%20auto%20chat%20web%20Islamic";
		foreach ($agen['agen'] as $row){
			$telp = $row->no_telp;
		}
		$whatsapp = "http://api.whatsapp.com/send?";
		$api = $whatsapp."phone=".$telp."&text=".$pesan;
		return $api;
	}
	public function load_bisnis(){
		$data = $this->load_testi();
		$api = $this->load_api();
		$lib['testi'] = $data;
		$lib['api'] = $api;
		$this->load->view('landing_bisnis',$lib);
	}

	public function load_produk(){
		$lib['testi']= $this->load_testi();
		$this->load->view('landing_produk',$lib);
	}


}
