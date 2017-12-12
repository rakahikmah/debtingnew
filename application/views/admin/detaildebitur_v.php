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
             <section class="invoice">
                <div class="row invoice-info">
                    <div class="col-sm-6 invoice-col">
                      <table class="table table-striped">
                        <tr>
                          <td>ID Debitur</td>
                          <td><?=$fetch_data['id_debitur']?></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td><?=$fetch_data['username']?></td>
                        </tr>
                        <tr>
                          <td>Nama Debitur</td>
                          <td><?=$fetch_data['nama']?></td>
                        </tr>
                        <tr>
                          <td>Pekerjaan</td>
                          <td><?=$fetch_data['pekerjaan']?></td>
                        </tr>
                      </table>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 invoice-col">
                      <table class="table table-striped">
                        <tr>
                          <td>NIK</td>
                          <td><?=$fetch_data['nik']?></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><?=$fetch_data['email']?></td>
                        </tr>
                        <tr>
                          <td>No Handphone</td>
                          <td><?=$fetch_data['no_telp']?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><?=$fetch_data['alamat']?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.row -->
                
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-md-6">
                      <h5 class='text-blue'>Barang Yang DiKreditkan</h5>
                      <hr />
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tr>
                            <td>Nama Barang</td>
                            <td><?=$fetch_data['nama_barang']?></td>
                          </tr>
                         <tr>
                            <td>Pengambilan Angsuran</td>
                            <td><?=$fetch_data['jumlah_angsuran']?></td>
                          </tr>
                          <tr>
                            <td>Tipe Pembayaran</td>
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
                            <td>Terdaftar</td>
                            <td><?=date('d-M-Y',strtotime($fetch_data['tanggal_daftar']))?></td>
                          </tr>
                          <tr>
                            <td>Jatuh Tempo</td>
                            <td>
                              <?php if($fetch_data['tipe_pembayaran'] == 7): ?>
                                Setiap 7 hari
                              <?php   else:?>
                               Tiap Tanggal <?=date('d',strtotime($fetch_data['tanggal_daftar']))?>
                             <?php endif;?> 
                            </td>
                          </tr>
                          <tr>
                            <td>Berakhir</td>
                            <td><?=date('d-M-Y',strtotime($fetch_data['tanggal_selesai']))?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <h5 class='text-blue'>Perhitungan</h5>
                      <hr align="left"  class="bg-yellow" />
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tr>
                            <td>Harga Barang</td>
                            <td>Rp <?=number_format($fetch_data['total_hargabarang'])?></td>
                          </tr>
                          <tr>
                            <td>Biaya Perangsur</td>
                            <td>Rp <?=number_format($fetch_data['bayar_perangsur'])?></td>
                          </tr>
                          <tr>
                            <td>Angsuran Ke</td>
                            <td>
                              <?=$jumlahangsurandebitur-1?> x
                            </td>
                          </tr>
                          <tr>
                            <td>Sudah Dibayar</td>
                            <td>Rp <?=number_format($pembayarandebitur)?></td>
                          </tr>
                          <tr>
                            <td>Belum Dibayar</td>
                            <td>Rp <?=number_format($fetch_data['total_hargabarang']-$pembayarandebitur)?></td>
                          </tr>
                         </table> 
                      </div>
                    </div>
                  </div>
              </section>
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

        <div class="box-body">
          <a href="<?=site_url("report/reporthistory/$fetch_data[id_debitur]")?>"><button class="btn btn-info">Cetak History Pembayaran</button></a>
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
                    <?php $no=1; ?> 
                    <?php foreach ($fetch_history_debitur as $fetch_history ): ?>
                    <tr>
                      
                      <td><?=$no++?></td>
                      <td>Rp <?=number_format($fetch_history['jumlah_bayar'])?></td>
                      <td><?=date('d-M-Y',strtotime($fetch_history['tgl_bayar']))?></td>
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