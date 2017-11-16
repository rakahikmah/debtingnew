<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
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


            "nama_barang"           =>$this->input->post("nama_barang"),
            "total_hargabarang"     =>$this->input->post("total_hargabarang"),
            "tipe_pembayaran"       =>$this->input->post("tipe_pembayaran"),
            "jumlah_angsuran"       =>$this->input->post("jumlah_angsuran"),
            "bayar_perangsur"       =>$this->input->post("bayar_perangsur"),
            "tanggal_pendaftaran"   =>date('Y-m-d'),
            "tanggal_selesai_bayar" =>date('Y-m-d',strtotime($this->input->post('tanggal_selesai_bayar'))),

            );
        return $this->db->insert("tb_debitur",$data);
    }

    public function insert_pembayaran_dp()
    {
        $data = array(
                    "id_debitur"     =>$this->input->post("id_debitur"),
                    "jumlah_bayar"   =>$this->input->post("bayar_dp"),
                    "tgl_bayar"      =>date('Y-m-d')
                );
        return $this->db->insert("tb_pembayaran",$data);
    }

    public function fetch_data_debitur(){
        $this->db->select("*");
        $this->db->from("tb_debitur");
        $query=$this->db->get();
        return $query;
    }

    public function fetch_detail_debitur($id_debitur)
    {
        $query = $this->db->get_where('tb_debitur',array('id_debitur'=>$id_debitur));
        return $query->row_array();
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

    public function update_debitur($id_debitur)
    {
        $data = array(
            "username"      =>$this->input->post("username"),
            "nama"          =>$this->input->post("nama"),
            "nama_barang"   =>$this->input->post("nama_barang"),
            "alamat"        =>$this->input->post("alamat"),
            "harga_barang"  =>$this->input->post("harga_barang"),
            "nik"           =>$this->input->post("nik"),
            "jatuh_tempo"   =>$this->input->post("jatuh_tempo"),
            "no_telp"       =>$this->input->post("no_telp"),
            "cicilan_min"   =>$this->input->post("cicilan_min"),
            "email"         =>$this->input->post("email"),
            "pekerjaan"     =>$this->input->post("pekerjaan"),
        );

        $this->db->where('id_debitur',$id_debitur);
        return $this->db->update('tb_debitur',$data);
    }

    public function delete_debitur($id_debitur)
    {
        return $this->db->delete('tb_debitur',array('id_debitur'=>$id_debitur));
    }

    public function reset_password_debitur($id_debitur)
    {
        $data = array (
                    'password' => $this->input->post('password')
                );
        $this->db->where('id_debitur',$id_debitur);
        return $this->db->update('tb_debitur',$data);
    }

    public function getkodedebitur($table) { 
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

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */