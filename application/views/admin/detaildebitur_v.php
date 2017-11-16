  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Debitur
      </h1>
    </section>

  
    <section class="content container-fluid">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Info Debitur</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body" style="">
          <div class="row">
            <div class="col-md-12">
              <div class="table table-responsive">
                <div class="col-md-6 col-md-offset-3">
                  <table class="table table-condensed">
                  <tr>
                    <td class="col-md-3">Id debitur</td>
                    <td class="col-md-2">:</td>
                    <td class="col-md-7"><?=$fetch_data['id_debitur']?></td>
                  </tr>
                  <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?=$fetch_data['nik']?></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><b><?=$fetch_data['username']?></b></td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$fetch_data['nama']?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$fetch_data['alamat']?></td>
                  </tr>
                  <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?=$fetch_data['no_telp']?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?=$fetch_data['email']?></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?=$fetch_data['pekerjaan']?></td>
                  </tr>
                  <tr>
                    <td>Nama barang</td>
                    <td>:</td>
                    <td><?=$fetch_data['nama_barang']?></td>
                  </tr>
                  <tr>
                    <td>Harga barang</td>
                    <td>:</td>
                    <td><?=$fetch_data['total_hargabarang']?></td>
                  </tr>
                  <tr>
                    <td>Tipe Pembayaran</td>
                    <td>:</td>
                    <td>
                      <?php 
                        if ($fetch_data['tipe_pembayaran'] == 7) {
                          echo "Perminggu";
                        }else{
                          echo "Perbulan";
                        }
                       ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Berapa Angsuran</td>
                    <td>:</td>
                    <td><?=$fetch_data['jumlah_angsuran']?>x</td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Bayar Perangsur</td>
                    <td>:</td>
                    <td><?=$fetch_data['bayar_perangsur']?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Registrasi</td>
                    <td>:</td>
                    <td><?=date('d-m-Y',strtotime($fetch_data['tanggal_pendaftaran']))?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Selesai Pembayaran</td>
                    <td>:</td>
                    <td><?=date('d-m-Y',strtotime($fetch_data['tanggal_selesai_bayar']))?></td>
                  </tr>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">History Pembayaran</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body" style="">
          <div class="row">
            <div class="col-md-12">
              <div class="table table-responsive">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jumlah Pembayaran</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($fetch_history_debitur as $fetch_history ): ?>
                    <tr>
                      <td><?=$fetch_history['id_debitur']?></td>
                      <td><?=$fetch_history['jumlah_bayar']?></td>
                      <td><?=$fetch_history['tgl_bayar']?></td>
                    </tr>    
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->