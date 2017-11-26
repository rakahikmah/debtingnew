<section id="contact" style="padding: 160px 0;">
      <div class="section-content">
        <h1 class="section-header text-center">Kirim Pesan</h1>
        <h3></h3>
      </div>
      <div class="contact-section">
        <div class="container">
          <div class="col-md-8 col-md-offset-2">
            <?php if ($this->session->flashdata('info')): ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-check"></i>Pesan Berhasil Terkirim </h5>
              </div>
            <?php endif; ?>
            <?php echo form_open('debitur/kirimpesan',array('class'=>'form-horizontal','method'=>'post')) ?>
                <div class="form-group">
                 <label for="id_debitur" class="col-md-2 control-label ">Id Debitur</label>
                  <div class="col-md-10">
                   <input type="text" name="id_debitur" class="form-control" value="<?=$detaildata['id_debitur']?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                 <label for="email" class="col-md-2 control-label ">Email</label>
                  <div class="col-md-10">
                   <input type="text" name="email"  class="form-control" value="<?=$detaildata['email']?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                 <label for="" class="col-md-2 control-label ">Subjek</label>
                  <div class="col-md-10">
                   <input type="text" name="subjek" class="form-control" value="<?=set_value('subjek')?>" placeholder="Subject Message">
                   <span class="text-danger"><?=form_error('subjek')?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-md-2 control-label ">Isi Pesan</label>
                  <div class="col-md-10">
                   <textarea  class="form-control" id="keterangan" name="keterangan" placeholder="Isi Pesan Anda" rows="4"><?=set_value('keterangan') ?></textarea>
                   <span class="text-danger"><?=form_error('keterangan') ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                     <button type="submit" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                  </div>
                </div>
            <?php echo form_close() ?>
          </div>
        </div>
    </div>
</section>




