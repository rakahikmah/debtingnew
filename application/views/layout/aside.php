
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user-debting.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
          <li><a href="<?=site_url('admin')?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
          <li><a href="<?=site_url('admin/datadebitur')?>"><i class="fa fa-book"></i> <span>Data Debitur</span></a></li>
          <li><a href="<?=site_url('admin/registerdebitur')?>"><i class="fa fa-plus"></i> <span>Register Debitur</span></a></li>
          <li><a href="<?=site_url('admin/konfirmasipembayaran')?>"><i class="fa fa-info"></i> <span>Konfirmasi Pembayaran</span></a></li>
          <li><a href="<?=site_url('admin/inputpembayaran')?>"><i class="fa fa-pencil"></i> <span>Input Pembayaran</span></a></li>
          <li>
            <?php if ($jumlahpesan > 0): ?>
              <a href="<?=site_url('admin/pesan')?>"><i class="fa fa-envelope"></i> <span>Pesan</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right"><?=$jumlahpesan;?></span>
              </span>
             </a>  
            <?php else: ?>
              <a href="<?=site_url('admin/pesan')?>"><i class="fa fa-envelope"></i> <span>Pesan</span></a>
            <?php endif ?>
          </li>
          <li><a href="<?=site_url('admin/resetdebitur')?>"><i class="fa fa-lock"></i> <span>Reset Password Debitur</span></a></li>
          <li><a href="<?=site_url('admin/gantipassword')?>"><i class="fa fa-lock"></i> <span>Ganti Password</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>