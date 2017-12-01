<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesan Debitur
      </h1>
    </section>
  <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
       <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Pesan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <?php echo form_open("admin/proses_kirim_pesan",array('class'=>'form-horizontal','method'=>'post')); ?>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label ">Id Debitur</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="id_debitur" value="<?=$datadebitur['id_debitur']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label ">Nama</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="nama" value="<?=$datadebitur['nama']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Subjek</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="subjek" value="">
                      <span class="text-danger"><?=form_error('subjek')?></span>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="" class="col-md-2 control-label">Isi Pesan</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="isipesan" rows="5"></textarea>
                      <span class="text-danger"><?=form_error('isipesan')?></span>
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-10">
                    <input type="submit" class="btn btn-primary pull-right" name="submit" value="Balas">
                    
                  </div>
                <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<script>

</script>
