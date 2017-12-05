<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container" style="padding: 0px 0px;">
     <div class="row">
       <div class="login-box">
          <div class="login-logo">
            <a href="<?=site_url('')?>"><b>Debting</b></a>
          </div>
          <!-- /.login-logo -->
          <div class="login-box-body">
            <?php if ($this->session->flashdata('info')): ?>
              <p class="text-danger" align="center">Password dan username salah</p>
            <?php endif ?>
            <p class="login-box-msg">Silahkan Login Dengan Username</p>
            <?php echo form_open('login/validationlogin', array("method"=>"post")); ?>
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-md-4 col-md-offset-8">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <!-- /.col -->
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.login-box-body -->
        </div>
      </div>
    </section>

     
   




