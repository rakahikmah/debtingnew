  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Debitur
      </h1>
    </section>
  <?php if ($this->session->flashdata('info')) : ?>
      <div class="alert alert-success">
        <i class="icon fa fa-check"></i>
        <span> Berhasil Mengirim Pesan</span>
      </div>
    <?php endif; ?>
  <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <?php if ($this->session->flashdata('infoinsert')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Info!</h4>
            Berhasil Mendaftar Debitur
          </div>
        <?php elseif ($this->session->flashdata('infodelete')): ?>  
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Info!</h4>
            Berhasil Mengedit Debitur
          </div>
        <?php endif ?>
        <div class="col-md-12">
          <div class="box">
            <br>
            <div class="box-body">
             <div class="table-responsive">
              <table id="datadebitur" class="table  table-hover">
                <thead>
                <tr>
                  <th>Id Debitur</th>
                  <th>Nama Debitur</th>
                  <th>Id Barang</th>
                  <th>Nama Barang</th>
                  <th>Harga Barang</th>
                </tr>
                </thead>
                <tbody>
                   <?php foreach ($debiturlunas as $dlunas): ?>
                     <tr> 
                        <td><?=$dlunas->id_debitur?></td>
                        <td><?=$dlunas->nama?></td>
                        <td><?=$dlunas->id_barang?></td>
                        <td><?=$dlunas->nama_barang?></td>
                        <td>Rp <?=number_format($dlunas->total_hargabarang)?></td>
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



<script>

</script>