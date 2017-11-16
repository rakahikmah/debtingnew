<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Debting</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/customs/home.css') ?>">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?=base_url('assets/img/profile/RP.png')?>" width="50" height="30" alt=""></a>
          <a class="navbar-brand" href="#">Debting</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <?php if ($this->session->has_userdata('role')): ?>
              <?php if ($this->session->userdata('role') =='admin'): ?>
                <a href="<?=site_url('admin')?>" class="btn btn-success"><?=$this->session->userdata('role')?></a>
              <?php else: ?>  
                <a href="<?=site_url('debitur')?>" class="btn btn-success"><?=$this->session->userdata('role')?></a>
              <?php endif; ?>
            <?php else: ?>
             <a href="<?=site_url('login')?>" class="btn btn-success">Login</a>
            <?php endif ?>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>