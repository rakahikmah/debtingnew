<section id="contact" style="padding: 160px 0;">
      <div class="section-content">
        <h1 class="section-header text-center">Pesan Masuk</h1>
        <h3></h3>
      </div>
      <div class="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-2 col-md-offset-4">
                  <b>Pesan Dari</b>
                </div>
                <div class="col-md-6">
                  <p align="justify">
                      <?=$detailpesan["dari"]?>
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
                   <a href="<?=site_url("debitur/kirimpesan/")?>" class="btn btn-primary" >Balas Pesan</a> 
                </div>
              </div>
              <br>
                  <!-- /.mail-box-messages -->
                </div>
              </div>
              <!-- /. box -->
            </div>
          </div>
        </div>
    </div>
</section>
<br>




