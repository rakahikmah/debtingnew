
<div class="container margin-jumbroton">
  <div class="jumbotron">
    <h2 align="center">Upload Bukti Pembayaran</h2>
      <?php echo form_open_multipart('debitur/uploadbukti',array('class'=>'form-horizontal','method'=>'post')); ?>
        <input type="hidden" name="id_barang" value="<?=$detaildata['id_barang']?>">
        <input type="hidden" name="id_debitur" value="<?=$detaildata['id_debitur']?>">
        <input type="hidden" name="jumlah_bayar" value="<?=$detaildata['bayar_perangsur']?>">
          <div class="form-group">
            <label for="" class="col-md-2 control-label"></label>
            <div class="col-md-10">
              <?php if ($error): ?>
                  <?=$error?>
              <?php endif ?>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-md-2 control-label">Upload Bukti</label>
            <div class="col-md-10">
              <input type="file" name="bukti_pembayaran">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-md-2 control-label ">Keterangan</label>
            <div class="col-md-10">
              <textarea name="keterangan" class="form-control" rows="5" ></textarea>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-10">
            <input type="submit" class="btn btn-primary pull-right" name="submit" value="Upload">
          </div>
      <?php echo form_close(); ?>
  </div>
</div>
 








<!-- Content Wrapper. Contains page content
  <div class="content-wrapper">
    Content Header (Page header)
    <section class="content-header">
      <h1>
       Upload Bukti Pembayaran
      </h1>
    </section>
   
    Main content
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Upload Pembayaran</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <?php echo form_open_multipart('debitur/uploadbukti',array('class'=>'form-horizontal','method'=>'post')); ?>
                <input type="hidden" name="id_barang" value="<?=$detaildata['id_barang']?>">
                <input type="hidden" name="id_debitur" value="<?=$detaildata['id_debitur']?>">
                <input type="hidden" name="jumlah_bayar" value="<?=$detaildata['bayar_perangsur']?>">
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                      <?php if ($error): ?>
                          <?=$error?>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Upload Bukti</label>
                    <div class="col-md-10">
                      <input type="file" name="bukti_pembayaran">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label ">Keterangan</label>
                    <div class="col-md-5">
                      <textarea name="keterangan" class="form-control" rows="8" ></textarea>
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-10">
                    <input type="submit" class="btn btn-primary pull-right" name="submit" value="Bayar">
                    
                  </div>
                <?php echo form_close(); ?>
               </div>
              </div>
            </div>
          </div>
         </div>
       </div> 
    </section>
    /.content
  </div>
  /.content-wrapper

 -->