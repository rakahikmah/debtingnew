
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function index()
	{
		echo date('Y-m-d');
		echo "<br>";
        echo date('Y-m-d',strtotime($this->input->post('tanggal_selesai_bayar')));	
	}

}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */
