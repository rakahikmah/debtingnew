<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Debitur
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Debitur</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <?php echo form_open('admin/editdebitur/'.$fetch_data['id_debitur'],array('class'=>'form-horizontal','method'=>'post')); ?> <div class="form-group">
                    <label for="id_debitur" class="col-md-2 control-label">ID Debitur</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="iddebitur" value="<?php echo $fetch_data['id_debitur']?>" readonly/>
                    </div>
                    <label for="username" class="col-md-2 control-label">Username</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="username" value="<?php echo $fetch_data["username"] ?>" placeholder="Username debitur">
                       <span class="text-danger"><?php echo form_error("username"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama" class="col-md-2 control-label">Nama</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nama" value="<?php echo $fetch_data['nama'] ?>" placeholder="Masukan nama debitur">
                      <span class="text-danger"><?php echo form_error("nama"); ?></span>
                    </div>
                    <label for="nik" class="col-md-2 control-label">NIK</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nik" value="<?php echo $fetch_data['nik'] ?>" placeholder="Nomor induk keterangan">
                       <span class="text-danger"><?php echo form_error("nik"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-4">
                      <textarea name="alamat" class="form-control"  placeholder="Masukan alamat debitur"><?php echo $fetch_data["alamat"] ?></textarea>
                       <span class="text-danger"><?php echo form_error("alamat"); ?></span>
                    </div>
                    <label for="no_telp" class="col-md-2 control-label">No Telp</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="no_telp" value="<?php echo $fetch_data['no_telp'] ?>" placeholder="Nomor telepon debitur">
                       <span class="text-danger"><?php echo form_error("no_telp"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-md-2 control-label">Email</label>
                    <div class="col-md-4">
                      <input type="email" class="form-control" name="email" value="<?php echo $fetch_data['email'] ?>" placeholder="Alamat email debitur">
                       <span class="text-danger"><?php echo form_error("email"); ?></span>
                    </div>
                     <label for="pekerjaan" class="col-md-2 control-label">Pekerjaan</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pekerjaan" value="<?php echo $fetch_data['pekerjaan'] ?>" placeholder="Pekerjaan">
                       <span class="text-danger"><?php echo form_error("pekerjaan"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_barang" class="col-md-2 control-label ">Nama Barang</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nama_barang" value="<?php echo $fetch_data['nama_barang'] ?>" placeholder="Nama barang debitur">
                       <span class="text-danger"><?php echo form_error("nama_barang"); ?></span>
                    </div>
                     <label for="harga_barang" class="col-md-2 control-label">Harga Barang</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="harga_barang" value="<?php echo $fetch_data['harga_barang'] ?>" placeholder="Harga barang">
                       <span class="text-danger"><?php echo form_error("harga_barang"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cicilan_min" class="col-md-2 control-label ">Minimal Cicilan</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="cicilan_min" value="<?php echo $fetch_data['cicilan_min'] ?>" placeholder="Minimal cicilan bayar">
                       <span class="text-danger"><?php echo form_error("cicilan_min"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jatuh_tempo" class="col-md-2 control-label ">Jatuh Tempo(Hari)</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="jatuh_tempo" value="<?php echo $fetch_data['jatuh_tempo'] ?>"  placeholder="Jatuh tempo pembayaran">
                       <span class="text-danger"><?php echo form_error("jatuh_tempo"); ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 pull-right">
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                    <input type="reset" class="btn btn-danger" name="reset" value="Batal">
                  </div>
                <?php echo form_close(); ?>
               </div>
              </div>
            </div>
          </div>
         </div>
       </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

