<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester_model extends CI_Model {

	public function fetch_data_debitur(){
        $this->db->select("*");
        $this->db->from("tb_pembayaran");
        $this->db->where('id_barang','BR001');
        $query=$this->db->get();
        return $query;
    }

    public function jumlahpesan()
    {
    	$this->db->select("*");
        $this->db->from('tb_pesan_to_debitur');
        $this->db->where('id_debitur',$this->session->userdata('id_debitur'));
        $this->db->where('status','belum');
        $query = $this->db->get();
        return $query->num_rows();
    }

}

/* End of file Tester_model.php */
/* Location: ./application/models/Tester_model.php */

 ?>