  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Debitur
      </h1>
    </section>

  

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
              <div class="table-responsive">
              <table id="datadebitur" class="table  table-hover">
                <thead>
                <tr>
                  <th>Pembayaran</th>
                  <th>Bayar</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($historypembayaran as $pembayaran): ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td>Rp<?=number_format($pembayaran['jumlah_bayar'])?></td>
                      <td><?=date('d-M-Y',strtotime($pembayaran['tgl_bayar']))?></td>
                    </tr>     
                  <?php endforeach ?>   
                </tbody>
              </table>
             </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
<script>

</script>