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
<body style="">
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
      <li><a class="navtab" data-toggle="pill" href="#home"><span class="glyphicon glyphicon-upload"></span> Home</a></li>
      <li><a class="navtab" data-toggle="pill" href="#unggah"><span class="glyphicon glyphicon-upload"></span> Unggah Pembayaran</a></li>
      <li><a class="navtab" data-toggle="pill" href="#riwayat"><span class="glyphicon glyphicon-time"></span> Riwayat Transaksi</a></li>
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
                  <a href="#" class="btn btn-danger btn-flat">Log Out</a>
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