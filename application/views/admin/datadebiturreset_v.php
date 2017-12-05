  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Debitur
      </h1>
    </section>
  <?php if ($this->session->flashdata('info')) : ?>
      <div class="alert alert-success">
        <i class="icon fa fa-check"></i>
        <span> Berhasil Mereset Password <?=$this->session->flashdata('info');?></span>
      </div>
    <?php endif; ?>
  <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <?php if ($this->session->flashdata('infoinsert')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Info!</h4>
            Berhasil Mendaftar Debitur
          </div>
        <?php elseif ($this->session->flashdata('infodelete')): ?>  
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Info!</h4>
            Berhasil Mengedit Debitur
          </div>
        <?php endif ?>
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
             <div class="table-responsive">
              <table id="datadebitur" class="table  table-hover">
                <thead>
                <tr>
                  <th>Id Debitur</th>
                  <th>Usernane</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>E-Mail</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                   <?php foreach ($fetch_data->result() as $row) :?>
                        <tr>
                          <td><?php echo $row->id_debitur;?></td>
                          <td><?php echo $row->username;?></td>
                          <td><?php echo $row->nama;?></td>
                          <td><?php echo $row->alamat;?></td>
                          <td><?php echo $row->no_telp;?></td>
                          <td><?php echo $row->email;?></td>
                          <td class="col-md-3">
                            <a href="<?php echo base_url("admin/prosesresetpassword/$row->id_debitur") ?>" class="btn btn-info">Reset Password Debitur</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
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
  <!-- /.content-wrapper -->



<script>

</script>