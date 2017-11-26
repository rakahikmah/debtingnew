<div id="unggah"  style="padding: 150px 0;" class="tab-pane fade in active">
    <div class="box-body">
      <div class="row">
        <h1 class="text-center">Unggah Pembayaran</h1>
      </div>
      <div class="row">
         <form class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-4" for="id_debitur">ID Debitur</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" placeholder="" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Nama</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="" readonly/>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-4">Bukti Transfer</label>
    <div class="col-sm-5">
      <input type="file" class="btn-outline-primary" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="">Keterangan(Optional)</label>
    <div class="col-sm-5">
      <textarea class="form-control" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-4">
      <input type="hidden" value="non-verified" placeholder="">
    </div>
  </div>
  <div class="row">
      <div class="col-xs-4 col-xs-offset-8">
        <input class="btn btn-lg btn-primary" type="submit" value="Kirim">
      </div>
    </div>
</form> 
      </div>
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