<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Debting</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
 
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/Ionicons/css/ionicons.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/customs/home.css') ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
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
      <a class="navbar-brand" href="<?=site_url('debitur')?>"><img src="<?=base_url('assets/img/profile/debtingfix.png')?>" width="100" class="img-responsive" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right nav-pills">
        <li class="<?php if($this->uri->segment(2)==""){echo "active";}?>"><a href="<?=site_url('debitur');?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="<?php if($this->uri->segment(2)=="uploadbukti"){echo "active";}?>" ><a href="<?=site_url('debitur/uploadbukti');?>"><span class="glyphicon glyphicon-upload"></span> Unggah Pembayaran</a></li>
        <li class="<?php if($this->uri->segment(2)=="historypembayaran"){echo "active";}?>"><a class="navtab" href="<?=site_url('debitur/historypembayaran');?>"><span class="glyphicon glyphicon-time"></span> Riwayat Transaksi</a></li>
        <li class="dropdown">
          <?php if ($jumlahpesan > 0): ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><?=$this->session->userdata('nama')?>&nbsp;&nbsp;&nbsp;<span style="color:white; background: red;"> <?=$jumlahpesan?></span>&nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
          <?php else: ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><?=$this->session->userdata('nama')?><span class="caret"></span></a> 
          <?php endif ?>
          <ul class="dropdown-menu">
            <li>
                <?php if ($jumlahpesan > 0): ?>
                  <a href="<?php echo site_url('debitur/pesan') ?>">Pesan &nbsp;&nbsp;&nbsp; 
                      <small><span class="btn btn-danger"><?=$jumlahpesan?></span></small></a>
                 <?php else: ?>
                       <a href="<?php echo site_url('debitur/pesan') ?>">Pesan</a>  
                <?php endif ?>
            </li>
            <li><a href="<?php echo site_url('debitur/kirimpesan') ?>">Kirim Pesan</a></li>
            <li><a href="<?php echo site_url('debitur/detaildebitur')?>">Detail Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('debitur/gantipassword') ?>">Ganti Password</a></li>
            <li><a class="signout" href="<?php echo site_url('login?logout=signout')?>">LOG OUT</a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



