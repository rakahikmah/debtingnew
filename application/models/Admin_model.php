<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function seluruhpiutang(){
        $this->db->select('SUM(total_hargabarang) as total');
        $this->db->from('tb_barang');
        return $this->db->get()->row()->total;
    }

    public function terbayarhutang(){
        $this->db->select('SUM(jumlah_bayar) as total');
        $this->db->from('tb_pembayaran');
        return $this->db->get()->row()->total;
    }

    public function jumlahdebitur(){
        $this->db->select("*");
        $this->db->from('tb_debitur');
        $this->db->where_not_in('role','admin');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudahdibayardebitur($id_debitur){
        $this->db->select('SUM(jumlah_bayar) as total');
        $this->db->where('id_debitur',$id_debitur);
        $this->db->from('tb_pembayaran');
        return $this->db->get()->row()->total;
    }

    public function jumlahangsuran($id_debitur){
        $this->db->select("*");
        $this->db->from('tb_pembayaran');
        $this->db->where('id_debitur');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function insert_data_debitur(){
            $data = array(
                "id_debitur"            =>$this->input->post("id_debitur"),
                "username"              =>$this->input->post("username"),
                "password"              =>$this->input->post("no_telp"),
                "nama"                  =>$this->input->post("nama"),
                "nik"                   =>$this->input->post("nik"),
                "alamat"                =>$this->input->post("alamat"),
                "no_telp"               =>$this->input->post("no_telp"),
                "email"                 =>$this->input->post("email"),
                "pekerjaan"             =>$this->input->post("pekerjaan"),
                "role"                  =>"debitur",
            );
        return $this->db->insert("tb_debitur",$data);
    }

    public function insert_barang(){
        $data = array (
            "id_debitur"            =>$this->input->post("id_debitur"),
            "id_barang"             =>$this->input->post("id_barang"),
            "nama_barang"           =>$this->input->post("nama_barang"),
            "total_hargabarang"     =>$this->input->post("total_hargabarang"),
            "tipe_pembayaran"       =>$this->input->post("tipe_pembayaran"),
            "jumlah_angsuran"       =>$this->input->post("jumlah_angsuran"),
            "bayar_perangsur"       =>$this->input->post("bayar_perangsur"),
            "tanggal_daftar"        =>date('Y-m-d'),
            "tanggal_selesai"       =>date('Y-m-d',strtotime($this->input->post('tanggal_selesai'))),
        );
       return $this->db->insert('tb_barang',$data);     
    }

    public function insert_pembayaran_dp()
    {
        $data = array(
                    "id_debitur"     =>$this->input->post("id_debitur"),
                    "jumlah_bayar"   =>$this->input->post("bayar_dp"),
                    "tgl_bayar"      =>date('Y-m-d'),
                    "id_barang"      =>$this->input->post("id_barang"),
                );
        return $this->db->insert("tb_pembayaran",$data);
    }

    public function delete_debitur($id_debitur)
    {
        return $this->db->delete('tb_debitur',array('id_debitur'=>$id_debitur));
    }

    public function fetch_data_debitur(){
        $this->db->select("*");
        $this->db->where_not_in('role','admin');
        $this->db->from("tb_debitur");
        $query=$this->db->get();
        return $query;
    }

    public function fetch_detail_debitur($id_debitur)
    {
        $this->db->select("*");
        $this->db->from('tb_debitur');
        $this->db->join('tb_barang','tb_barang.id_debitur = tb_debitur.id_debitur' );
        $this->db->where('tb_debitur.id_debitur',$id_debitur);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function bayarangsurandebitur()
    {
        $data = array (
            'id_debitur'=>$this->input->post('id_debitur'),
            'id_barang'=>$this->input->post('id_barang'),
            'jumlah_bayar'=>$this->input->post('jumlah_bayar'),
            'tgl_bayar'=>date('Y-m-d'),
        );
        return $this->db->insert('tb_pembayaran',$data);
    }

    public function fetch_history_debitur($id_debitur)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_debitur','tb_debitur.id_debitur = tb_pembayaran.id_debitur');
        $this->db->where('tb_pembayaran.id_debitur', $id_debitur);
        $query = $this->db->get();
        return $query->result_array();
    }

   public function getkodedebitur() { 
            $this->db->select("RIGHT(tb_debitur.id_debitur,3) AS kode ");
            $this->db->order_by('id_debitur', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('tb_debitur');
            if($query->num_rows()>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "DB".$kodemax;
            return $kodejadi;
   }

   public function getkodebarang(){
        $this->db->select("RIGHT(tb_barang.id_barang,3) AS kode ");
            $this->db->order_by('id_barang', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('tb_barang');
            if($query->num_rows()>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "BR".$kodemax;
            return $kodejadi;
   }

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */