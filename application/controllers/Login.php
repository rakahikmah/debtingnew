<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('welcome');
		}else{
			if ($this->session->has_userdata('role')) {
				if ($this->session->userdata('role') == "admin") {
					redirect('admin');
				}else if($this->session->userdata('role') == "debitur"){
					redirect('debitur');
				}
			}
		}
		
	}

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('login/loginform_v');	
		$this->load->view('home/footer');
	}

	public function validationlogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
					'username'=>$username,
					'password'=>$password
				);
		$cek = $this->login_model->ceklogin('tb_debitur',$where)->num_rows();
		if ($cek > 0) {
			$result = $this->db->get_where('tb_debitur',$where)->row_array();
			if ($result['no_telp'] == $result['password']) {
				$data_session = array(
								'username'=>$result['username'],
								'id_debitur'=>$result['id_debitur'],
								'nama'=>$result['nama'],
								'resetpassword'=>'ya',
								'role'=>$result['role']
				);
				$this->session->set_userdata($data_session);
				redirect('resetpassword');
			}else{
				$data_session = array(
								'username'=>$result['username'],
								'id_debitur'=>$result['id_debitur'],
								'nama'=>$result['nama'],
								'resetpassword'=>'tidak',
								'role'=>$result['role']
							);
				$this->session->set_userdata($data_session);
				if ($result['role'] == 'admin') {
					$this->session->set_flashdata('informasi', 'true');
					redirect('admin');
				}else if($result['role'] == 'debitur'){
					redirect('debitur');
				}
			}
		}else{
			$this->session->set_flashdata('info', 'true');
			redirect('login');
		}
	}

	
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

