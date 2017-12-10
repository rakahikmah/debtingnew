<section id="contact" style="padding: 160px 0;">
      <div class="section-content">
        <h1 class="section-header text-center">Pesan Masuk</h1>
        <h3></h3>
      </div>
      <div class="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><b><?=$detailpesan["subjek"]?></b></h3>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12">
                 <h4><b>Pesan Dari</b>:<?=$detailpesan["dari"];?></h4>
                </div>
              </div>
              
              </div>
             
              <div class="row">
               <div class="col-md-12">
                  <h4><b>Isi Pesan:</b></h4>
                </div>
                </div>
                <div class="row">
                	<div class="col-md-10 col-md-offset-1">
                   <div class="panel panel-default">
    	<div class="panel-body"><?=$detailpesan["isipesan"]?></div>
 		 </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-2 col-md-offset-10">
                   <a href="<?=site_url("debitur/kirimpesan/")?>"  class="btn btn-primary"><span class="ion-reply"> </span>Balas Pesan</a> 
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




