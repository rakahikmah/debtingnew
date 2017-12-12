<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function fetch_data_debitur()
	{
        $this->db->select("*");
        $this->db->from("tb_pembayaran");
        $this->db->join("tb_debitur",'tb_debitur.id_debitur=tb_pembayaran.id_debitur');
        $this->db->join("tb_barang",'tb_barang.id_barang=tb_pembayaran.id_barang');
        $this->db->where("status","sudah");
        $query=$this->db->get();
        return $query->result_array();
    }

     public function terbayarhutang(){
        $this->db->select('SUM(jumlah_bayar) as total');
        $this->db->where('status','sudah');
        $this->db->from('tb_pembayaran');
        return $this->db->get()->row()->total;
    }

    public function historypembayaran($id_pembayaran)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->where('id_pembayaran',$id_pembayaran);
        $this->db->where('status','sudah');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function detaildebitur($id_debitur)
    {
    	$this->db->select('*');
        $this->db->from('tb_debitur');
        $this->db->where('id_debitur',$id_debitur);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function detailbarang($id_barang)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_barang','tb_barang.id_barang = tb_pembayaran.id_barang');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function historypembayaran_per_debitur($id_debitur)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->where('id_debitur',$id_debitur);
        $this->db->where('status','sudah');
        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file Report_model.php */
/* Location: ./application/models/Report_model.php */

