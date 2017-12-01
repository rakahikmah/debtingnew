<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Debitur
      </h1>
    </section>
 <?php if ($this->session->flashdata('info')): ?>
      <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Info!</h4>
            Berhasil Melakuka Pembayaran
          </div>
    <?php endif; ?>
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
              <table id="datadebitur" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Debitur</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($fetch_data->result() as $row): ?>
                    <tr>
                      <td><?=$row->id_debitur?></td>
                      <td><?=$row->nama?></td>
                      <td><?=$row->alamat?></td>
                      <td><a href="<?php echo base_url("admin/bayarangsurandebitur/$row->id_debitur") ?>" class="btn btn-primary">Input Angsuran</a></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
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

