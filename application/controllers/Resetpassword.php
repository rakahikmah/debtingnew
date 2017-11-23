<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('resetpassword')) {
			redirect('login');
		}elseif($this->session->userdata('resetpassword')=='tidak'){
			if ($this->session->userdata('role') == 'admin') {
				redirect('admin');
			}elseif($this->session->userdata('role') == 'debitur'){
				redirect('debitur');
			}
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('confirmpassword','confirmpassword','trim|required|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('login/resetform_v');
		} else {
			$id_debitur = $this->session->userdata('id_debitur');
			$this->debitur_model->reset_password_debitur($id_debitur);
			$data_session = array (
								'username'=>$this->session->userdata('username'),
								'id_debitur'=>$this->session->userdata('id_debitur'),
								'nama'=>$this->session->userdata('nama'),
								'resetpassword'=>'tidak',
								'role'=>$this->session->userdata('role')
							);
			$this->session->set_userdata($data_session);
			redirect('debitur','refresh');
		}	
	}

}

/* End of file Resetpassword.php */
/* Location: ./application/controllers/Resetpassword.php */
