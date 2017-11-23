

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debitur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('role')) {
			redirect('login');
		}else if($this->session->userdata('role') == 'admin'){
			redirect('admin');
		}
	}

	public function index()
	{
		$data['totalhargadebitur']=$this->debitur_model->totalhargadebitur();
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('debitur/dashboard_v',$data);
		$this->load->view('layout/footer');
	}

}

/* End of file Debitur.php */
/* Location: ./application/controllers/Debitur.php */
