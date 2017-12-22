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
        $this->db->where('status','sudah');
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

    public function jumlahdebiturlunas()
    {
        $query = $this->db->query("SELECT pb.id_debitur,pb.id_debitur,SUM(jumlah_bayar),br.total_hargabarang 
                          FROM tb_pembayaran pb JOIN tb_barang br ON pb.id_barang=br.id_barang 
                          GROUP BY id_debitur HAVING sum(jumlah_bayar)=br.total_hargabarang
                        ");
        return $query->num_rows();
    }

    public function sudahdibayardebitur($id_debitur){
        $this->db->select('SUM(jumlah_bayar) as total');
        $this->db->where('id_debitur',$id_debitur);
        $this->db->from('tb_pembayaran');
        $this->db->where('status','sudah');
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

    public function pesanpertamadebitur()
    {
            date_default_timezone_set("Asia/Jakarta");
             $isipesan = "Haloo ".$this->input->post('nama')." Selamat anda telah berhasil terdaftar sebagai debitur
                        untuk hal yang ingin ditanyakan silakan hubungin admin/kreditur melalui kirim pesan Terima Kasih";     
            $data = array(
                'id_debitur'           =>$this->input->post("id_debitur"),
                'subjek'               =>'Selamat Datang',
                'isipesan'             =>$isipesan,
                'dari'                 =>$this->session->userdata('nama'),
                'tgl_kirim'            =>date('Y-m-d'),
                'waktu'                =>date('G:i:s'),
                'status'               =>'belum'
            );
            return $this->db->insert("tb_pesan_to_debitur",$data);
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
                    "status"         =>'sudah',
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

    public function fetch_data_debitur_pesan($id_debitur){
        $this->db->select("*");
        $this->db->from("tb_debitur");
        $this->db->where('id_debitur',$id_debitur);
        $query=$this->db->get();
        return $query->row_array();
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
            'id_debitur'   => $this->input->post('id_debitur'),
            'id_barang'    => $this->input->post('id_barang'),
            'jumlah_bayar' => $this->input->post('jumlah_bayar'),
            'tgl_bayar'    => date('Y-m-d'),
            'status'       => 'sudah'
        );
        return $this->db->insert('tb_pembayaran',$data);
    }

    public function fetch_konfirmasi_pembayaran()
    {
        $this->db->select('*');
        $this->db->from('tb_konfirm_bayar');
        $this->db->join('tb_debitur','tb_debitur.id_debitur = tb_konfirm_bayar.id_debitur');
        $this->db->join('tb_barang','tb_barang.id_barang = tb_konfirm_bayar.id_barang');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function updatekonfirmbuktipembayaran($id_debitur,$id_barang)
    {
        $data = array (
            'status' => 'sudah'
        );
        
        $this->db->where('id_barang',$id_barang);
        $this->db->where('id_debitur',$id_debitur);
        $this->db->where('status','belum');
        $this->db->limit(1);
        return $this->db->update('tb_konfirm_bayar',$data);
    }

    public function update_tb_pembayaran($id_debitur,$id_barang)
    {
        $data = array(
            'status' => 'sudah'
        );

        $this->db->where('id_barang',$id_barang);
        $this->db->where('id_debitur',$id_debitur);
        $this->db->where('status','belum');
        $this->db->limit(1);
        return $this->db->update('tb_pembayaran',$data);

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

    public function jumlahangsurandebitur($id_debitur)
    {
        $this->db->select('*');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_debitur','tb_debitur.id_debitur = tb_pembayaran.id_debitur');
        $this->db->where('tb_pembayaran.id_debitur', $id_debitur);
        $query = $this->db->get();
        return $query->num_rows();
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

   public function pesanmasuk()
   {
        date_default_timezone_set("Asia/Jakarta"); 
        
        $this->db->select('*');
        $this->db->from('tb_pesan_from_debitur');
        $this->db->join('tb_debitur', 'tb_debitur.id_debitur = tb_pesan_from_debitur.id_debitur');
        $this->db->order_by('waktu','DESC');
        $query = $this->db->get();
        return $query->result_array();

   }

   public function detailpesan($id_debitur,$id_pesan)
   {
        $this->db->select('*');
        $this->db->from('tb_pesan_from_debitur');
        $this->db->join('tb_debitur','tb_debitur.id_debitur = tb_pesan_from_debitur.id_debitur');
        $this->db->where('tb_pesan_from_debitur.id_pesan',$id_pesan);
        $this->db->where('tb_debitur.id_debitur',$id_debitur);
        $query = $this->db->get();
        return $query->row_array();
   }

   public function proses_balas_pesan()
   {
        date_default_timezone_set("Asia/Jakarta");

        $data = array (
            'id_debitur'    =>$this->input->post('id_debitur'),
            'subjek'        =>$this->input->post('subjek'),
            'isipesan'      =>$this->input->post('isipesan'),
            'dari'          =>$this->session->userdata('nama'),
            'tgl_kirim'   =>date('Y-m-d'),
            'waktu'         =>date('G:i:s'),
            'status'        =>'belum'
        );

        return $this->db->insert('tb_pesan_to_debitur',$data);
   }

   public function ubahstatusbaca($id_pesan)
   {
        $data = array (
            'status' => 'sudah'
        );

        $this->db->where('id_pesan',$id_pesan);
        $this->db->where('status','belum');
        return $this->db->update('tb_pesan_from_debitur',$data);
   }

   public function resetdebitur($id_debitur,$no_telp)
   {
        $data = array(
            'password'=>$no_telp
        );
        $this->db->where('id_debitur',$id_debitur);
        return $this->db->update('tb_debitur',$data);
   }

   public function gantipassword()
   {
        $data = array (
            'password'=>$this->input->post('passwordbaru'),
        );
        $this->db->where('id_debitur',$this->session->userdata('id_debitur'));
        return $this->db->update('tb_debitur',$data);
   }

   public function jumlahpesan()
    {
        $this->db->select("*");
        $this->db->from('tb_pesan_from_debitur');
        $this->db->where('status','belum');
        $query = $this->db->get();
        return $query->num_rows();
    }

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */