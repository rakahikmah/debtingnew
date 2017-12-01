<section id="contact" style="padding: 160px 0;">
      <div class="section-content">
        <h1 class="section-header text-center">Kirim Pesan</h1>
        <h3></h3>
      </div>
      <div class="contact-section">
        <div class="container">
          <div class="col-md-8 col-md-offset-2">
            <?php echo form_open('debitur',array('class'=>'form-horizontal','method'=>'post')) ?>
                <div class="form-group">
                 <label for="" class="col-md-2 control-label ">Id Debitur</label>
                  <div class="col-md-10">
                   <input type="text" name="subjek" class="form-control" value="" readonly>
                  </div>
                </div>
                <div class="form-group">
                 <label for="" class="col-md-2 control-label ">Email</label>
                  <div class="col-md-10">
                   <input type="text" name="subjek" class="form-control" placeholder="subjek" readonly>
                  </div>
                </div>
                <div class="form-group">
                 <label for="" class="col-md-2 control-label ">Subjek</label>
                  <div class="col-md-10">
                   <input type="text" name="subjek" class="form-control" placeholder="Subject Message">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-md-2 control-label ">Isi Pesan</label>
                  <div class="col-md-10">
                   <textarea  class="form-control" id="keterangan" placeholder="Isi Pesan Anda" rows="4"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                     <button type="button" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                  </div>
                </div>
            <?php echo form_close(); ?>
          </div>
        </div>
    </div>
</section>




