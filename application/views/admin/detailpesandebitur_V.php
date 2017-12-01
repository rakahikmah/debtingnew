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
              <div class="row">
                <div class="col-md-2 col-md-offset-4">
                  <b>Pesan Dari</b>
                </div>
                <div class="col-md-6">
                  <p align="justify">
                      <?=$detailpesan["nama"]?>
                  </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2 col-md-offset-4">
                  <b>Subjek</b>
                </div>
                <div class="col-md-6">
                  <p align="justify">
                     <?=$detailpesan["subjek"]?>
                  </p>
                </div>
              </div>
              <br>
              <div class="row">
               <div class="col-md-2 col-md-offset-4">
                  <b>Isi Pesan</b>
                </div>
                <div class="col-md-6">
                  <p align="justify">
                      <?=$detailpesan["isipesan"]?>
                  </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2 col-md-offset-4">
                  <a href="<?=site_url("admin/balas_pesan_debitur/$detailpesan[id_debitur]")?>" class="btn btn-primary" >Balas Pesan</a>
                </div>
              </div>
             </div>
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