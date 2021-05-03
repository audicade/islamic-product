<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('BisnisModel');
		$this->load->database();
		// $this->load->library('pagination');
	}

	public function index()
	{
		// Pagination
		// $config['base_url'] = base_url().'main/';
		// $config['total_rows'] = $this->BisnisModel->getCountAgent();
		// $config['per_page'] = 5;

		// $config['full_tag_open'] = '<nav><ul class="pagination">';
		// $config['full_tag_close'] = ' </ul></nav>';

		// $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<li class="page-item">';
		// $config['first_tag_close'] = '</li>';

		// $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<li class="page-item">';
		// $config['last_tag_close'] = '</li>';

		// $config['next_link'] = '&raquo';
		// $config['next_tag_open'] = '<li class="page-item">';
		// $config['next_tag_close'] = '</li>';

		// $config['prev_link'] = '&laquo';
		// $config['prev_tag_open'] = '<li class="page-item">';
		// $config['prev_tag_close'] = '</li>';

		// $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		// $config['cur_tag_close'] = '</a></li>';

		// $config['num_tag_open'] = '<li class="page-item">';
		// $config['num_tag_close'] = '</li>';

		// $config['attributes'] = array('class' => 'page-link');
		
		// $this->pagination->initialize($config);
		
		// $data['start'] = $this->uri->segment(3);
		// Pagination

		$data['agent']= $this->BisnisModel->getAgent();
		// $lib['data']= $this->BisnisModel->getTesti()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/modal', $data);
		// $this->load->view('landing_bisnis',$lib);
		$this->load_bisnis();
		$this->load->view('templates/footer');
	}

	public function produk()
	{
		$data['agent']= $this->BisnisModel->getAgent();

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
		
		$this->form_validation->set_rules('kodeB', 'Kode Agent', 'trim|required');
		$this->form_validation->set_rules('namaB', 'Nama Agent', 'trim|required');
		$this->form_validation->set_rules('noTelpB', 'No Telp Agent', 'trim|required');
		$this->form_validation->set_rules('domisiliB', 'Domisili', 'trim|required');
		
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

		$this->form_validation->set_rules('kodeA', 'Kode Agent', 'trim|required');
		$this->form_validation->set_rules('namaA', 'Nama Agent', 'trim|required');
		$this->form_validation->set_rules('noTelpA', 'No Telp Agent', 'trim|required');
		$this->form_validation->set_rules('domisiliA', 'Domisili', 'trim|required');
	
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
