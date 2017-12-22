<br>
<br>
<br>
<div class="container margin-jumbroton" style="padding: 0px 0px;">
  <div class="jumbotron">
    <h2 align="center">Detail Debitur</h2>
    <br>
    <br>
    <br>  
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Nama Lengkap</b>
          </div>
          <div class="col-md-7">
            <?=$detaildebitur['nama']?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Username</b>
          </div>
          <div class="col-md-7">
          <?=$detaildebitur['username']?>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-5">
            <b>NIK</b>
          </div>
          <div class="col-md-7">
            <?=$detaildebitur['nik']?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Alamat</b>
          </div>
          <div class="col-md-7">
            <?=$detaildebitur['alamat']?>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Nomor Telepon</b>
          </div>
          <div class="col-md-7">
            <?=$detaildebitur['no_telp']?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Pekerjaan</b>
          </div>
          <div class="col-md-7">
          <?=$detaildebitur['pekerjaan']?>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Nama Barang</b>
          </div>
          <div class="col-md-7">
            <?=$detailbarangdebitur['nama_barang']?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Harga Barang</b>
          </div>
          <div class="col-md-7">
          <?=number_format($detailbarangdebitur['total_hargabarang'])?>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Bayar Perangsur</b>
          </div>
          <div class="col-md-7">
            <?=$detailbarangdebitur['bayar_perangsur']?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-5">
            <b>Angsuran Untuk</b>
          </div>
          <div class="col-md-7">
          <?=$detailbarangdebitur['jumlah_angsuran']?> x
          </div>
        </div>
      </div><br>
  </div>
</div>
 







