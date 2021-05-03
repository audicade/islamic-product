<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->_login();
	}

	private function _login()
	{
		$email = $this->input->post('emailL');
		$password = $this->input->post('passwordL');
		
		$user = $this->db->get_where('admin', ['email' => $email])->row_array();
		$url = $_SERVER['APP_URL'].$_SERVER['REQUEST_URI'];

		// jika user ada
		if($user) {
			
			// cek password
			if($password == $user['password']){
				
				$data = [
					'email' => $user['email']
				];
				$this->session->set_userdata('admin_id', $user['admin_id']);
				$this->session->set_userdata($data);
				
				if ($url == "http://localhost/islamic-product/main" || $url == "https://localhost/islamic-product/") {
				$this->session->set_flashdata('bisnis', 'Berhasil Login');
				redirect('main');	
				} else {
					$this->session->set_flashdata('bisnis', 'Berhasil Login');
					redirect('main/produk');
				}
					
			} else {
				if ($url == "http://localhost/islamic-product/main" || $url == "https://localhost/islamic-product/") {
				$this->session->set_flashdata('bisnis', 'Password Salah!');
				redirect('main');
				} else {
					$this->session->set_flashdata('bisnis', 'Password Salah!');
					redirect('main/produk');
				}
					
			}
				
		} else{
			if ($url == "http://localhost/islamic-product/main" || $url == "https://localhost/islamic-product/") {
				$this->session->set_flashdata('bisnis', 'Akun Tidak Terdaftar!');
				redirect('main');
			} else {
				$this->session->set_flashdata('bisnis', 'Akun Tidak Terdaftar!');
				redirect('main/produk');
			}
            
		}
	}

	public function logout()
	{
		$url = $_SERVER['APP_URL'].$_SERVER['REQUEST_URI'];

		if ($url == "http://localhost/islamic-product/main" || $url == "https://localhost/islamic-product/") {
				$this->session->sess_destroy();
				redirect('main','refresh');
			} else {
				$this->session->sess_destroy();
				redirect('main/produk','refresh');
			}
		
	}

}

