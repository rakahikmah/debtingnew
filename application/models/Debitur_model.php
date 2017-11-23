<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debitur_Model extends CI_Model {

public function __construct()
    {
        parent::__construct();
    }	
public function totalhargadebitur(){	

	$this->db->select('SUM(total_hargabarang) as total');
	$this->db->where('id_debitur',$this->session->userdata('id_debitur'));
	$this->db->from('tb_barang');
	return $this->db->get()->row()->total;
}
}

/* End of file Debitur_Model.php */
/* Location: ./application/models/Debitur_Model.php */