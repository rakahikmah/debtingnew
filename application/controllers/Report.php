
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function reportadmin()
	{
		$this->load->library('Pdf');
		$data['fetch_data'] = $this->report_model->fetch_data_debitur();
		$data['jumlahterbayar'] = $this->report_model->terbayarhutang();
		$this->load->view('report/reportadmin_pdf',$data);
	}

	public function reportdebitur($id_pembayaran)
	{
		$this->load->library('Pdf');
		$data['fetch_data'] = $this->report_model->historypembayaran($id_pembayaran);
		$this->load->view('report/reportdebitur_pdf', $data);
	}

}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */
