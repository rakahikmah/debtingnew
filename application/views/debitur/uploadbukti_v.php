
<div class="container margin-jumbroton">
  <h2 align="center">Upload Bukti Pembayaran</h2>
  <div class="jumbotron">
    <?php if ($this->session->flashdata('info')): ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fa fa-check"></i>Berhasil Mengupload Bukti Pembayaran </h5>
            </div>
    <?php endif; ?>
      <?php echo form_open_multipart('debitur/uploadbukti',array('class'=>'form-horizontal','method'=>'post')); ?>
        
        <input type="hidden" name="id_barang" value="<?=$detaildata['id_barang']?>">
        <input type="hidden" name="jumlah_bayar" value="<?=$detaildata['bayar_perangsur']?>">
          <div class="form-group">
            <label for="" class="col-md-2 control-label"></label>
            <div class="col-md-10">
              <?php if (isset($error)): ?>
                  <?=$error?>
              <?php endif ?>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-md-2 control-label">Id Debitur</label>
            <div class="col-md-2">
              <input type="text" name="id_debitur" id="id_debitur" style="font-weight: bold;" class="form-control" value="<?=$detaildata['id_debitur']?>" readonly>
            </div>
          </div>
           <div class="form-group">
            <label for="" class="col-md-2 control-label">Nama Debitur</label>
            <div class="col-md-4">
              <input type="text" name="nama" id="namadebitur" style="font-weight: bold;" class="form-control" value="<?=$detaildata['nama']?>" readonly>
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
 







