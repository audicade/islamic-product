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
		
		// jika user ada
		if($user) {
			
			// cek password
			if($password == $user['password']){
				
				$data = [
					'email' => $user['email']
				];
				$this->session->set_userdata('admin_id', $user['admin_id']);
				$this->session->set_userdata($data);
				
				$this->session->set_flashdata('bisnis', 'Berhasil Login');
				redirect('main');
						
			} else {
				$this->session->set_flashdata('bisnis', 'Password Salah!');
				redirect('main');	
			}
				
		} else{
            $this->session->set_flashdata('bisnis', 'Akun Tidak Terdaftar!');
			redirect('main');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main','refresh');
	}

}

