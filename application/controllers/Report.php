
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		$this->load->library('Pdf');
	}

	public function reportadmin()
	{
		$this->load->library('Pdf');
		$data['fetch_data'] = $this->report_model->fetch_data_debitur();
		$data['jumlahterbayar'] = $this->report_model->terbayarhutang();
		
		$this->load->view('report/reportadmin_pdf',$data);
	}

	public function reportdebitur($id_pembayaran,$id_barang)
	{
		$this->load->library('Pdf');
		$data['detaildebitur'] = $this->report_model->detaildebitur($this->session->userdata('id_debitur'));
		$data['detailbarang']  = $this->report_model->detailbarang($id_barang);
		$data['historybayar']  = $this->report_model->historypembayaran($id_pembayaran);
		$data['angsuran_ke']   =$this->uri->segment(5);
		
		$this->load->view('report/reportdebitur_pdf', $data);
	}

	public function reporthistory($id_debitur)
	{
		$this->load->library('Pdf');
		$data['detaildebitur'] = $this->report_model->detaildebitur($id_debitur);
		$data['historypembayaran'] = $this->report_model->historypembayaran_per_debitur($id_debitur);

		$this->load->view('report/reportdetaildebitur_pdf',$data);
	}

}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */
