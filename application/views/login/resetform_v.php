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
  <!-- /.login-logo -->
          <div class="login-box-body">
            <p class="login-box-msg">Reset Password Anda</p>
            <?php echo form_open('resetpassword', array("method"=>"post")); ?>
              <div class="form-group has-feedback">
                <span class="text-danger"><?php echo form_error('password') ?></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <span class="text-danger"><?php echo form_error('confirmpassword') ?></span>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
                </div>
                <!-- /.col -->
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.login-box-body -->
        </div>
      </div>
    </section>

     
   





