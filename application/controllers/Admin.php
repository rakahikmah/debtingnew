<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('role')) {
			redirect('login');
		}else if($this->session->userdata('role') == 'debitur'){
			redirect('debitur');
		}
	}

	public function index()
	{
		$data['jumlahdebitur'] 			= $this->admin_model->jumlahdebitur();
		$data['seluruhhargabarang']		= $this->admin_model->seluruhpiutang();
		$data['terbayarhutang']			= $this->admin_model->terbayarhutang();
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/dashboard_v',$data);
		$this->load->view('layout/footer');
	}

	public function datadebitur()
	{
		$data['fetch_data']				=$this->admin_model->fetch_data_debitur();
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/datadebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function detaildebitur($id_debitur)
	{
		$data['fetch_data']				=$this->admin_model->fetch_detail_debitur($id_debitur);
		$data['fetch_history_debitur'] 	=$this->admin_model->fetch_history_debitur($id_debitur);
		$data['pembayarandebitur']      =$this->admin_model->sudahdibayardebitur($id_debitur);
		$data['jumlahangsurandebitur']  =$this->admin_model->jumlahangsurandebitur($id_debitur);
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/detaildebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function konfirmasipembayaran()
	{
		$data['fetch_data']	= $this->admin_model->fetch_konfirmasi_pembayaran();
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');		
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/konfirmasipembayaran_v',$data);
		$this->load->view('layout/footer');
	}

	public function konfirmbuktipembayaran($id_debitur,$id_barang)
	{
		$this->admin_model->updatekonfirmbuktipembayaran($id_debitur,$id_barang);
		$this->admin_model->update_tb_pembayaran($id_debitur,$id_barang);
		$this->session->set_flashdata('info','true');
		redirect('admin/konfirmasipembayaran');
	}

	public function inputpembayaran()
	{
		$data['fetch_data']				=$this->admin_model->fetch_data_debitur();
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();
		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/datadebiturbayar_v',$data);
		$this->load->view('layout/footer');
	}

	public function bayarcicilan()
	{
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/formpembayaran_v');
		$this->load->view('layout/footer');
	}

	public function bayarangsurandebitur($id_debitur = false)
	{
		$data['fetch_data'] 			= $this->admin_model->fetch_detail_debitur($id_debitur);
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();
		if ($id_debitur == NULL) {
			$this->admin_model->bayarangsurandebitur();
			$this->session->set_flashdata('info','true');
			redirect('admin/inputpembayaran');
		}else{
			$this->load->view('layout/header');
			$this->load->view('layout/aside',$data);
			$this->load->view('admin/formpembayaran_v',$data);
			$this->load->view('layout/footer');
		}
	}

	public function registerdebitur()
	{
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
		$this->form_validation->set_rules('tipe_pembayaran', 'Tipe Pembayaran', 'required',array('required'=>'Harap isi tipe pembayaran'));
		$this->form_validation->set_rules('jumlah_angsuran','Jumlah Angsuran','required',array('required'=>'Harap isi jumlah angsuran'));
		$this->form_validation->set_rules('bayar_dp', 'Bayar DP', 'required', array('required' =>'Harga DP Belum Terhitung'));
		$this->form_validation->set_rules('tanggal_selesai', 'Tanggal Selesai', 'required', array('required' =>'Tanggal Selesai Belum Terhitung'));
		$this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required', array('required' =>'Tanggal Daftar Belum Selesai'));

		if($this->form_validation->run() == FALSE) {
			$data['kddebitur']			    = $this->admin_model->getkodedebitur();
			$data['kdbarang']  				= $this->admin_model->getkodebarang();
			$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

			$this->load->view('layout/header');
			$this->load->view('layout/aside',$data);
			$this->load->view('admin/registerdebitur_v',$data);
			$this->load->view('layout/footer');
		} else {
			$this->admin_model->insert_data_debitur();
			$this->admin_model->insert_barang();
			$this->admin_model->insert_pembayaran_dp();
			$this->admin_model->pesanpertamadebitur();
			$this->session->set_flashdata('infoinsert', 'true');
			redirect(site_url("admin/datadebitur"));
		}
	}

	
	public function deletedebitur($id_debitur)
	{
		$this->admin_model->delete_debitur($id_debitur);
		$this->session->set_flashdata('infodelete', 'true');
		redirect(site_url("admin/datadebitur"));
	}

	public function detailpesan($id_debitur,$id_pesan)
	{
		$this->admin_model->ubahstatusbaca($id_pesan);
		$data['detailpesan'] 			=$this->admin_model->detailpesan($id_debitur,$id_pesan);
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/detailpesandebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function pesan()
	{
		$data["pesanmasuk"] 			= $this->admin_model->pesanmasuk();
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/pesandebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function balas_pesan_debitur($id_debitur)
	{

		$id_debitur 					= $this->uri->segment(3);
		$data["datadebitur"]			=$this->admin_model->fetch_data_debitur_pesan($id_debitur);
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/kirimpesan_v',$data);
		$this->load->view('layout/footer');
	}

	public function kirimpesan($id_debitur)
	{
		$id_debitur 					= $this->uri->segment(3);
		$data["datadebitur"]			=$this->admin_model->fetch_data_debitur_pesan($id_debitur);
		$data['jumlahpesan']			= $this->admin_model->jumlahpesan();

		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/kirimpesan2_v',$data);
		$this->load->view('layout/footer');	
	}

	public function proses_balas_pesan()
	{
		$this->admin_model->proses_balas_pesan();
		$this->session->set_flashdata('info', 'true');
		redirect('admin/pesan');
	}

	public function proses_kirim_pesan()
	{
		$this->admin_model->proses_balas_pesan();
		$this->session->set_flashdata('info', 'true');
		redirect('admin/datadebitur');
	}

	public function resetdebitur()
	{
		$data['fetch_data']		=$this->admin_model->fetch_data_debitur();
		$data['jumlahpesan']	= $this->admin_model->jumlahpesan();
		$this->load->view('layout/header');
		$this->load->view('layout/aside',$data);
		$this->load->view('admin/datadebiturreset_v',$data);
		$this->load->view('layout/footer');
	}

	public function prosesresetpassword($id_debitur)
	{
		$where = array(
				'id_debitur'=>$id_debitur
			);
		$result = $this->db->get_where('tb_debitur',$where)->row_array();
		$this->admin_model->resetdebitur($id_debitur,$result['no_telp']);
		$this->session->set_flashdata('info',$result['nama']);
		redirect('admin/resetdebitur');
	}

	public function gantipassword()
	{
		$this->form_validation->set_rules('passwordbaru', 'passwordbaru', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('confirmpassword','confirmpassword','trim|required|matches[passwordbaru]');
		$data['jumlahpesan']	= $this->admin_model->jumlahpesan();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header');
			$this->load->view('layout/aside',$data);
			$this->load->view('admin/gantipassword_v');
			$this->load->view('layout/footer');
		} else {
			$this->admin_model->gantipassword();
			$this->session->set_flashdata('info', 'true');
			redirect('admin/gantipassword');
		}

		
	}
	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
