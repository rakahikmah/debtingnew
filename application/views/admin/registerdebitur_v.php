<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register Debitur
      </h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Registrasi Debitur</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <?php echo form_open('admin/registerdebitur',array('class'=>'form-horizontal','method'=>'post')); ?> <div class="form-group">
                    <label for="id_debitur" class="col-md-2 control-label">ID Debitur</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="id_debitur" value="<?=$kddebitur?>" readonly/>
                    </div>
                    <label for="username" class="col-md-2 control-label">Username</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" placeholder="Username debitur" required>
                       <span class="text-danger"><?php echo form_error("username"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama" class="col-md-2 control-label">Nama</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Masukan nama debitur" required>
                      <span class="text-danger"><?php echo form_error("nama"); ?></span>
                    </div>
                    <label for="nik" class="col-md-2 control-label">NIK</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nik" value="<?php echo set_value('nik') ?>" placeholder="Nomor induk keterangan" required>
                       <span class="text-danger"><?php echo form_error("nik"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-4">
                      <textarea name="alamat" class="form-control"  placeholder="Masukan alamat debitur" required=""><?php echo set_value('alamat') ?></textarea>
                       <span class="text-danger"><?php echo form_error("alamat"); ?></span>
                    </div>
                    <label for="no_telp" class="col-md-2 control-label">No Telp</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="no_telp" value="<?php echo set_value('no_telp') ?>" placeholder="Nomor telepon debitur" required>
                       <span class="text-danger"><?php echo form_error("no_telp"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-md-2 control-label">Email</label>
                    <div class="col-md-4">
                      <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>" placeholder="Alamat email debitur" required>
                       <span class="text-danger"><?php echo form_error("email"); ?></span>
                    </div>
                     <label for="pekerjaan" class="col-md-2 control-label">Pekerjaan</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pekerjaan" value="<?php echo set_value('pekerjaan') ?>" placeholder="Pekerjaan" required>
                       <span class="text-danger"><?php echo form_error("pekerjaan"); ?></span>
                    </div>
                  </div>
              <div class="panel panel-default">
                <div class="panel-heading">Perhitungan</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="nama_barang" class="col-md-2 control-label ">Nama Barang</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="nama_barang" value="<?php echo set_value('nama_barang') ?>" placeholder="Nama barang debitur" required>
                         <span class="text-danger"><?php echo form_error("nama_barang"); ?></span>
                      </div>
                       <label for="harga_barang" class="col-md-2 control-label">Harga Barang</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="harga_barang" value="<?php echo set_value('harga_barang') ?>" placeholder="Harga barang" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tipe_pembayaran" class="col-md-2 control-label ">Tipe Pembayaran</label>
                      <div class="col-md-4">
                        <?php 
                            $data = array(
                                      ""  => "Tipe Pembayaran",               
                                      "7" => "Perminggu",
                                      "30" => "Perbulan",
                                      );
                              echo form_dropdown(array('name'=>'tipe_pembayaran','class'=>'form-control'),$data,set_value('Tipe Pembayaran'));
                          ?>
                          <span class="text-danger"><?php echo form_error("tipe_pembayaran"); ?></span>
                      </div>
                       <label for="jumlah_angsuran" class="col-md-2 control-label">Jumlah Angsuran</label>
                      <div class="col-md-4">
                        <?php 
                            $data = array(
                                      ""  => "Jumlah Angsuran",               
                                      "6" => "6x",
                                      "12" => "12x",
                                      "18" => "18x"
                                              );
                              echo form_dropdown(array('name'=>'jumlah_angsuran','class'=>'form-control'),$data,set_value('Jumlah Angsuran'));
                          ?>
                          <span class="text-danger"><?php echo form_error("jumlah_angsuran"); ?></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="total_hargabarang" class="col-md-2 control-label ">Total Harga Barang</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="total_hargabarang" value="<?php echo set_value('total_hargabarang') ?>" placeholder="Total Harga Barang" readonly>
                         <span class="text-danger"><?php echo form_error("total_hargabarang"); ?></span>
                      </div>
                      <label for="bayar_perangsur" class="col-md-2 control-label ">Bayar Perangsur</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="bayar_perangsur"   placeholder="Bayar Perangsur" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="bayar_dp" class="col-md-2 control-label ">Bayar DP</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="bayar_dp"   placeholder="Bayar DP" readonly>
                         <span class="text-danger"><?php echo form_error("bayar_dp"); ?></span>
                      </div>
                      <label for="`" class="col-md-2 control-label ">Tanggal Pendaftaran</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="tanggal_daftar" value="<?php echo date('d-m-Y') ?>" placeholder="tanggal_daftar" readonly required>
                         <span class="text-danger"><?php echo form_error("tanggal_daftar"); ?></span>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai" class="col-md-2 control-label ">Tanggal Selesai Bayar</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="tanggal_selesai"  readonly required>
                           <span class="text-danger"><?php echo form_error("tanggal_selesai"); ?></span>
                        </div>
                        <div class="col-md-4">
                          <input type="hidden" class="form-control" name="id_barang" value="<?=$kdbarang?>" readonly>
                           <span class="text-danger"><?php echo form_error("id_barang"); ?></span>
                        </div>
                    </div>
                  </div>
                </div>
                   <div class="col-md-3 pull-right">
                      <input type="submit" class="btn btn-primary" name="submit" value="Register">
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

