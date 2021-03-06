<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    <?php if ($this->session->flashdata('informasi')) :
               ?>
      <div class="alert alert-success">
        <i class="icon fa fa-check"></i>
        <span> Selamat Datang Admin</span>
      </div>
    <?php endif; ?>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
     <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$jumlahdebitur?></h3>
              <p>Jumlah Debitur</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="<?=site_url('admin/datadebitur')?>" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Rp <?=number_format($seluruhhargabarang);?></h3>
              <p>Seluruh Harga Barang</p>
            </div>
            <div class="icon">
              RP
            </div>
            <div class="small-box-footer">
             Jumlah Harga Barang
            </div>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Rp <?=number_format($terbayarhutang);?></h3>
              <p>Terbayar</p>
            </div>
            <div class="icon">
              RP
            </div>
            <div class="small-box-footer">
             Terbayar
            </div>
          </div>
        </div>
        <!-- ./col -->
      
        <!-- ./col -->
      </div>
      <div class="row">

        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Rp <?=number_format($seluruhhargabarang-$terbayarhutang);?></h3>
              <p>Belum Terbayar</p>
            </div>
            <div class="icon">
              RP
            </div>
            <div class="small-box-footer">
             Belum Terbayar
            </div>
          </div>
        </div>

          <div class="col-md-4">
          <!-- small box -->

          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $jumlahdebiturlunas ?></h3>
              <p>Lunas</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-round"></i>
            </div>
            <a href="<?php echo site_url('admin/datadebituryanglunas') ?>" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
       
      </div>
   </section>
   <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

