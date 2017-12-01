<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Konfirmasi Pembayaran
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
             <?php if ($this->session->flashdata('info')): ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fa fa-check"></i>Berhasil Mengkonfirmasi </h5>
                </div>
            <?php endif; ?>
            <div class="box-body">
              <div class="table-responsive">
              <table id="datadebitur" class="table table-bordered table-hover ">
                <thead>
                <tr>
                  <th>Id Debitur</th>
                  <th>Nama</th>
                  <th>Upload Gambar</th>
                  <th>Nama Barang</th>
                  <th>Bayar Perangsur</th>
                  <th>Keterangan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($fetch_data as $fetch_data_v): ?>
                    <tr>
                      <td><?=$fetch_data_v['id_debitur']?></td>
                      <td><?=$fetch_data_v['nama']?></td>
                      <td><a href='<?=base_url("assets/img/uploadbukti/$fetch_data_v[bukti_pembayaran]")?>'><img src='<?=base_url("assets/img/uploadbukti/$fetch_data_v[bukti_pembayaran]")?>' class="img-responsive" width="100" alt=""></a></td>
                      <td><?=$fetch_data_v['nama_barang']?></td>
                      <td><?=$fetch_data_v['bayar_perangsur']?></td>
                      <td><?=$fetch_data_v['keterangan']?></td>
                      <td>
                        <?php if ($fetch_data_v['status'] == "belum" ) : ?>
                            <a href='<?=site_url("admin/konfirmbuktipembayaran/$fetch_data_v[id_debitur]/$fetch_data_v[id_barang]")?>' class="btn btn-success">Konfirmasi</a>
                        <?php else: ?>
                          <p class="label bg-green">Sudah Di Konfirmasi</p>   
                        <?php endif ?>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
             </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

