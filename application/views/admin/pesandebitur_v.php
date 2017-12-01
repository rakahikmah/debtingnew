<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesan Debitur
      </h1>
    </section>
    <?php if ($this->session->flashdata('info')) : ?>
      <div class="alert alert-success">
        <i class="icon fa fa-check"></i>
        <span> Berhasil Mengirim Pesan</span>
      </div>
    <?php endif; ?>
   
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pesan Masuk</h3>
              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php foreach ($pesanmasuk as $pesan): ?>
                     <tr
                        <?php if ($pesan['status'] == 'belum'): ?>
                            style= "background-color: #dff0d8 !important;"
                        <?php else: ?>
                            style=""
                        <?php endif ?>  
                      >
                        <td class="mailbox-name"><a href="<?=site_url("admin/detailpesan/$pesan[id_debitur]/$pesan[id_pesan]")?>"><?=$pesan['nama'];?></a></td>
                        <td class="mailbox-subject"><b><?=$pesan['subjek'];?></b>,<?=word_limiter($pesan['isipesan'],3)?>
                        </td>
                        <td class="mailbox-date"><?=date('d-M-Y',strtotime($pesan['tgl_terkirim']))?></td>
                        <td class="mailbox-time">
                          <?=date('G:i:s',strtotime($pesan['waktu']))?>
                        </td>
                     </tr>    
                    <?php endforeach ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
          </div>
          <!-- /. box -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

