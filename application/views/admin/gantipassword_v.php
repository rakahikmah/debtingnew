<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ganti Password
      </h1>
    </section>
    <?php if ($this->session->flashdata('info')) : ?>
      <div class="alert alert-success">
        <i class="icon fa fa-check"></i>
        <span> Berhasil Menganti Password</span>
      </div>
    <?php endif; ?>
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ganti Password</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <?php echo form_open('admin/gantipassword',array('class'=>'form-horizontal','method'=>'post')); ?> 
                  <div class="form-group">
                    <label for="passwordbaru" class="col-md-2 control-label">Password Baru</label>
                      <div class="col-md-10">
                        <input type="password" class="form-control" name="passwordbaru"  placeholder="Password Baru" required>
                         <span class="text-danger"><?php echo form_error("passwordbaru"); ?></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="confirmpassword" class="col-md-2 control-label">Confirm Password</label>
                      <div class="col-md-10">
                        <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required>
                        <span class="text-danger"><?php echo form_error("confirmpassword"); ?></span>
                      </div>
                   </div>
                   <div class="form-group">
                     <div class="col-md-10 col-md-offset-2">
                       <input type="submit" name="submit" value="Ganti Password" class="btn btn-primary">
                     </div>
                   </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
          </div>
         </div>
       </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

