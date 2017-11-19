<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('role')) {
			redirect('login');
		}else if($this->session->userdata('role') == 'debitur'){
			redirect('debitur');
		}
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/dashboard_v');
		$this->load->view('layout/footer');
	}

	public function datadebitur()
	{
		$data['fetch_data']=$this->admin_model->fetch_data_debitur();
		
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/datadebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function detaildebitur($id_debitur)
	{
		$data['fetch_data']		=$this->admin_model->fetch_detail_debitur($id_debitur);
		$data['fetch_history_debitur'] 	=$this->admin_model->fetch_history_debitur($id_debitur);
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/detaildebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function konfirmasipembayaran()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/konfirmasipembayaran_v');
		$this->load->view('layout/footer');
	}

	public function inputpembayaran()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/datadebiturbayar_v');
		$this->load->view('layout/footer');
	}

	public function bayarcicilan()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/formpembayaran_v');
		$this->load->view('layout/footer');
	}


	public function registerdebitur(){
		//form validation untuk debitur
		$this->form_validation->set_rules("username", "username","required|alpha_numeric|min_length[5]",array('required' => 'harap isi Username anda','alpha_numeric'=>'tidak boleh menggunakan spasi'));
		$this->form_validation->set_rules("nama", "Nama","required|min_length[4]",array('required' => 'Harap isi username anda' ));
		$this->form_validation->set_rules("nik", "NIK","required|numeric|min_length[16]",array('required' => 'Harap Isi NIK' ));
		$this->form_validation->set_rules("alamat", "Alamat","required|min_length[10]",array('required' => 'Harap Isi Alamat Anda' ));
		$this->form_validation->set_rules("no_telp", "No Telepon","required|numeric|min_length[9]",array('required' => 'Harap Isi No Telepon' ));
		$this->form_validation->set_rules("email", "Email","required",array('required' => 'Harap Isi Email' ));
		$this->form_validation->set_rules("pekerjaan", "Pekerjaan","required",array('required' => 'Harap Isi Pekerjaan' ));
		
		
		//form validation untuk barang debitur
		$this->form_validation->set_rules("nama_barang", "Nama Barang","required",array('required' => 'Harap Isi Nama Barang' ));
		$this->form_validation->set_rules("harga_barang", "Harga Barang","required|numeric",array('required'=>'Harap Isi Harga Barang'));

		if($this->form_validation->run() == FALSE) {
			$data['kddebitur'] = $this->admin_model->getkodedebitur('debitur');
			$this->load->view('layout/header');
			$this->load->view('layout/aside');
			$this->load->view('admin/registerdebitur_v',$data);
			$this->load->view('layout/footer');
		} else {
			$this->admin_model->insert_data_debitur();
			$this->admin_model->insert_pembayaran_dp();
			$this->session->set_flashdata('infoinsert', 'true');
			redirect(site_url("admin/datadebitur"));
		}
	}

	public function editdebitur($id_debitur)
	{
		$this->form_validation->set_rules("username", "username","required|alpha_numeric|min_length[5]",array('required' => 'harap isi Username anda','alpha_numeric'=>'tidak boleh menggunakan spasi'));
		$this->form_validation->set_rules("nama", "Nama","required|min_length[4]",array('required' => 'Harap isi username anda' ));
		$this->form_validation->set_rules("nama_barang", "Nama Barang","required",array('required' => 'Harap Isi Nama Barang' ));
		$this->form_validation->set_rules("alamat", "Alamat","required|min_length[10]",array('required' => 'Harap Isi Alamat Anda' ));
		$this->form_validation->set_rules("harga_barang", "Harga Barang","required|numeric",array('required'=>'Harap Isi Harga Barang'));
		$this->form_validation->set_rules("nik", "NIK","required|numeric|min_length[16]",array('required' => 'Harap Isi NIK' ));
		$this->form_validation->set_rules("jatuh_tempo", "Jatuh Tempo","required|numeric",array('required' => 'Harap Isi Jatuh Tempo' ));
		$this->form_validation->set_rules("no_telp", "No Telepon","required|numeric|min_length[10]",array('required' => 'Harap Isi No Telepon' ));
		$this->form_validation->set_rules("cicilan_min", "Minimal Cicilan","required|numeric","required",array('required' => 'Harap Isi No Telepon ' ));
		$this->form_validation->set_rules("email", "Email","required",array('required' => 'Harap Isi Email' ));
		$this->form_validation->set_rules("pekerjaan", "Pekerjaan","required",array('required' => 'Harap Isi Pekerjaan' ));


		if($this->form_validation->run() == FALSE) {
			$data['fetch_data'] = $this->admin_model->fetch_detail_debitur($id_debitur);
			$this->load->view('layout/header');
			$this->load->view('layout/aside');
			$this->load->view('admin/editdebitur_v',$data);
			$this->load->view('layout/footer');
		} else {
			$this->admin_model->update_debitur($id_debitur);
			$this->session->set_flashdata('infoedit', 'true');
			redirect(site_url("admin/datadebitur"));
		}
	}

	public function deletedebitur($id_debitur)
	{
		$this->admin_model->delete_debitur($id_debitur);
		$this->session->set_flashdata('infoedit', 'true');
		redirect(site_url("admin/datadebitur"));
	}
	/*public function test($id_debitur)
	{
		$ar=array();
		$ar=$this->admin_model->fetch_detail_debitur($id_debitur);
		echo json_encode($ar);	
	}*/
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
