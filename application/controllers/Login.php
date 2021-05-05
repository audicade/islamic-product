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
        $url = $this->input->post('landing',true);
		$landing = substr($url,33,6);

		// jika user ada
		if($user) {
			// cek password
			if($password == $user['password']){
				
				$data = [
					'email' => $user['email']
				];
				$this->session->set_userdata('admin_id', $user['admin_id']);
				$this->session->set_userdata($data);
				
				if ($landing == "bisnis" || $landing == "") {
				$this->session->set_flashdata('bisnis', 'Berhasil Login');
				redirect('bisnis');	
				} else if ($landing == "produk") {
					$this->session->set_flashdata('bisnis', 'Berhasil Login');
					redirect('produk');
				}
					
			} else {
				if ($landing == "bisnis" || $landing == "") {
				$this->session->set_flashdata('bisnis', 'Password Salah!');
				redirect('bisnis');
				} else if($landing == "produk"){
					$this->session->set_flashdata('bisnis', 'Password Salah!');
					redirect('produk');
				}
			}
				
		} else{
			if ($landing == "bisnis" || $landing == "") {
				$this->session->set_flashdata('bisnis', 'Akun Tidak Terdaftar!');
				redirect('bisnis');
			} else if ($landing == "produk"){
				$this->session->set_flashdata('bisnis', 'Akun Tidak Terdaftar!');
				redirect('produk');
			}
		}
	}

	public function routeLogout(){
		$landingOut = $this->input->post('landingOut',true);
		$route = substr($landingOut,33,6);

		if ($route == "bisnis" || $route == "") {
			redirect('login/logoutBisnis');
			echo $route;
		} else if ($route == "produk") {
			redirect('login/logoutProduk');
			echo $route;
		} else {
			echo $route;
		}
	}	

	public function logoutBisnis()
	{	
		$this->session->sess_destroy();
		redirect('bisnis');
	}

	public function logoutProduk()
	{
		$this->session->sess_destroy();
		redirect('produk');
	}

}