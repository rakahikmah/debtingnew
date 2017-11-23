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

		$data['sudahterbayar'] =$this->debitur_model->sudahterbayar();
		$data['seluruhhutang'] =$this->debitur_model->seluruhhutang();

		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('debitur/dashboard_v',$data);
		$this->load->view('layout/footer');
	}

	public function historypembayaran()
	{
		$data['historypembayaran'] =$this->debitur_model->historypembayaran();
		
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('debitur/historypembayaran_v',$data);
		$this->load->view('layout/footer');
	}

	

	public function uploadbukti(){
		$config['upload_path'] = './assets/img/uploadbukti';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']  = '100';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('bukti_pembayaran')){
			$data['error'] = $this->upload->display_errors();
			$data['detaildata'] = $this->debitur_model->fetch_detail_debitur();

			$this->load->view('layout/header');
			$this->load->view('layout/aside');
			$this->load->view('debitur/uploadbukti_v',$data);
			$this->load->view('layout/footer');
		}
		else{
			$data = $this->upload->data();
			$picture = $data['file_name'];
			$this->debitur_model->uploadbuktipembayaran($picture);

			$data['error'] = $this->upload->display_errors();
			$data['detaildata'] = $this->debitur_model->fetch_detail_debitur();
			$this->load->view('layout/header');
			$this->load->view('layout/aside');
			$this->load->view('debitur/uploadbukti_v',$data);
			$this->load->view('layout/footer');
		}
	}

}

/* End of file Debitur.php */
/* Location: ./application/controllers/Debitur.php */
