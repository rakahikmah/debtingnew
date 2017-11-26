<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debitur_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function sudahterbayar(){
        $this->db->select('SUM(jumlah_bayar) as total');
        $where = array(
            'id_debitur' =>$this->session->userdata('id_debitur'),
            'status'     =>'sudah',
        );
        $this->db->where($where);
        $this->db->from('tb_pembayaran');
        return $this->db->get()->row()->total;
    }

    public function seluruhhutang(){                                         
        $this->db->select('SUM(total_hargabarang) as total');
        $this->db->where('id_debitur',$this->session->userdata('id_debitur'));
        $this->db->from('tb_barang');
        return $this->db->get()->row()->total;
    }

    public function reset_password_debitur(){
        $data = array (
            'password' => $this->input->post('password')
        );

        $this->db->where('id_debitur',$this->session->userdata('id_debitur'));
        return $this->db->update('tb_debitur',$data);
    }

    public function historypembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_debitur','tb_debitur.id_debitur = tb_pembayaran.id_debitur');
        $this->db->where('tb_pembayaran.id_debitur', $this->session->userdata('id_debitur'));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function fetch_detail_debitur()
    {
        $this->db->select("*");
        $this->db->from('tb_debitur');
        $this->db->join('tb_barang','tb_barang.id_debitur = tb_debitur.id_debitur' );
        $this->db->where('tb_debitur.id_debitur',$this->session->userdata('id_debitur'));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function uploadbuktipembayaran($picture)
    {
        $data = array (
            'id_debitur'        => $this->input->post('id_debitur'),
            'id_barang'         => $this->input->post('id_barang'),
            'bukti_pembayaran'  => $picture,
            'status'            => 'belum',
            'keterangan'        => $this->input->post('keterangan')
        );
        return $this->db->insert('tb_konfirm_bayar',$data);
    }

    public function inputbayarlewatupload()
    {
        $data = array (
            'id_debitur'        => $this->input->post('id_debitur'),
            'id_barang'         => $this->input->post('id_barang'),
            'jumlah_bayar'      => $this->input->post('jumlah_bayar'),
            'tgl_bayar'         => date('Y-m-d'),
            'status'            => 'belum'
        );

        return $this->db->insert('tb_pembayaran',$data);
    }

    public function kirimpesan()
    {

        $time = date("h:i:sa");
        $chagetimestamp= strtotime($time)+(3600*6);
        $data = array (
            'id_debitur'    => $this->input->post('id_debitur'),
            'subjek'        => $this->input->post('subjek'),
            'isipesan'      => $this->input->post('keterangan'),
            'tgl_terkirim'  => date('Y-m-d'),
            'waktu'         => date('h:i:s',$chagetimestamp)
        );

        return $this->db->insert('tb_pesan',$data);
    }

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */