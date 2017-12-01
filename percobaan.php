<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="#"><img class="img-responsive" src="<?=base_url('assets/img/profile/debtingfix.png')?>" width="100" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav nav-pills navbar-right">
      <li><a class="navtab" href="<?=site_url('debitur');?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a class="navtab" href="<?=site_url('debitur/uploadbukti');?>"><span class="glyphicon glyphicon-upload"></span> Unggah Pembayaran</a></li>
      <li><a class="navtab" href="<?=site_url('debitur/historypembayaran');?>"><span class="glyphicon glyphicon-time"></span> Riwayat Transaksi</a></li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rama<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <center>
              <h3>Rama Febriandy</h3>
              <h3 class="success">Sisa Pembayaran:<p class="text-success">Rp.500.000</p></h3>
              </li>
             
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a id="tombol" href="#" class="btn btn-primary">Pesan <span class="label label-success">4</span></a>
                  </div>
                  <div class="col-xs-4 text-center col-md-offset-3">
                    <a id="tombol" href="<?php echo site_url('debitur/kirimpesan') ?>" class="btn btn-primary">Kirim Pesan</a>
                  </div>
                </div>
                 </center>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="" class="btn btn-info">Reset Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login?logout=signout')?>" class="btn btn-danger btn-flat">Log Out</a>
                </div>
              </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<!-- <nav class="navbar navbar-default navbar-fixed-top navigasi pull-left">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-left"><img class="img-responsive" src="<?=base_url('assets/img/profile/debtingfix.png')?>" width="100" alt=""></a>
         
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <div class="collapse navbar-collapse pull-right" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Unggah Pembayaran</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Riwayat Transaksi</a></li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rakanjing<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="btn btn-primary" href="#">Kirim Pesan</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

    </ul>
    </div>
      </div>
    </nav> -->


<div id="unggah"  style="padding: 150px 0;" class="tab-pane fade in active">
    <div class="box-body">
      <div class="row">
        <h1 class="text-center">Unggah Pembayaran</h1>
      </div>
      <div class="row">
         <form class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-4" for="id_debitur">ID Debitur</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" placeholder="" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Nama</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="" readonly/>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-4">Bukti Transfer</label>
    <div class="col-sm-5">
      <input type="file" class="btn-outline-primary" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="">Keterangan(Optional)</label>
    <div class="col-sm-5">
      <textarea class="form-control" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-4">
      <input type="hidden" value="non-verified" placeholder="">
    </div>
  </div>
  <div class="row">
      <div class="col-xs-4 col-xs-offset-8">
        <input class="btn btn-lg btn-primary" type="submit" value="Kirim">
      </div>
    </div>
</form> 
      </div>
    </div>
  </div>


  
<!-- Content Wrapper. Contains page content
  <div class="content-wrapper">
    Content Header (Page header)
    <section class="content-header">
      <h1>
       Upload Bukti Pembayaran
      </h1>
    </section>
   
    Main content
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Upload Pembayaran</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <?php echo form_open_multipart('debitur/uploadbukti',array('class'=>'form-horizontal','method'=>'post')); ?>
                <input type="hidden" name="id_barang" value="<?=$detaildata['id_barang']?>">
                <input type="hidden" name="id_debitur" value="<?=$detaildata['id_debitur']?>">
                <input type="hidden" name="jumlah_bayar" value="<?=$detaildata['bayar_perangsur']?>">
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                      <?php if ($error): ?>
                          <?=$error?>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Upload Bukti</label>
                    <div class="col-md-10">
                      <input type="file" name="bukti_pembayaran">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label ">Keterangan</label>
                    <div class="col-md-5">
                      <textarea name="keterangan" class="form-control" rows="8" ></textarea>
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-10">
                    <input type="submit" class="btn btn-primary pull-right" name="submit" value="Bayar">
                    
                  </div>
                <?php echo form_close(); ?>
               </div>
              </div>
            </div>
          </div>
         </div>
       </div> 
    </section>
    /.content
  </div>
  /.content-wrapper

 -->