<section id="contact" style="padding: 160px 0;">
      <div class="section-content">
        <h1 class="section-header text-center">Pesan</h1>
        <h3></h3>
      </div>
      <div class="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pesan Masuk</h3>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <?php foreach ($pesanmasuk as $pesan): ?>
                     <tr
                        <?php if ($pesan['status'] == 'belum'): ?>
                            style= "background-color: #dff0d8 !important;"
                        <?php else: ?>
                            style=""
                        <?php endif ?>  
                      >
                        <td class="mailbox-name"><a href="<?=site_url("debitur/detailpesan/$pesan[id_pesan]")?>"><?=$pesan['dari'];?></a></td>
                        <td class="mailbox-subject"><b><?=$pesan['subjek'];?></b>,<?=word_limiter($pesan['isipesan'],3)?>
                        </td>
                        <td class="mailbox-date"><?=date('d-M-Y',strtotime($pesan['tgl_kirim']))?></td>
                        <td class="mailbox-time">
                          <?=date('G:i:s',strtotime($pesan['waktu']))?>
                        </td>
                     </tr>    
                    <?php endforeach ?>
                    </table>
                    <!-- /.table -->
                  </div>
                  <!-- /.mail-box-messages -->
                </div>
              </div>
              <!-- /. box -->
            </div>
          </div>
        </div>
    </div>
</section>




