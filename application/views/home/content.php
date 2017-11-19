<div class="container-fluid header-image">	
	
	  <div class="container">
	  	<center>
	    <h2>Debting</h2>
	    <h3>The Mage Of Debt</h3>
	    <?php if ($this->session->has_userdata('role')): ?>
              <?php if ($this->session->userdata('role') =='admin'): ?>
                <a href="<?=site_url('admin')?>" class="btn btn-primary login-btn"> Login As <?=$this->session->userdata('role')?></a>
              <?php else: ?>  
                <a href="<?=site_url('debitur')?>" class="btn btn-primary login-btn">Login As <?=$this->session->userdata('role')?></a>
              <?php endif; ?>
            <?php else: ?>
             <a href="<?=site_url('login')?>" class="btn btn-primary login-btn">Login</a>
            <?php endif ?>
	   </center> 
	  </div>
</div>

<div class="container-fluid about-us">
	<div class="row featurette">
	   <div class="col-md-5">
	      <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="https://i.pinimg.com/736x/dd/64/da/dd64da585bc57cb05e5fd4d8ce873f57--library-logo-kids-logo.jpg" data-holder-rendered="true">
	    </div>
	     <div class="col-md-7 ">
	      <h2 class="featurette-heading">About Debting</h2>
	      <p class="lead">DEBTING adalah merupakan aplikasi penyedia layanan pembukuan catatan utang piutang berbasis cloud atau website. Dengan adanya aplikasi DEBTING ini Debitur dapat mengetahui jumlah hutang yang harus dibayar kepada kreditur begitu juga kreditur juga dapat mengetahui hutang Debitur (piutang) dengan menggunakan website sehingga tidak perlu lagi pencatatan hutang piutang dengan menggunakan buku

</p>
	    </div>
	 </div>
</div>
	<div class="footer">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
	      <h3 align="center">Alamat Kami</h3>
	      <table class="table">
	      	<tr>
	      		<td><h4>Lokasi: Jalan Mawar No.47</h4></td>
	      		<td></td>
	      	</tr>
	      	<tr>
	      		<td><h4>No Telepon: 082233332222</h4></td>
	      		<td></td>
	      	</tr>
	      </table>
  		</div>
  		<div class="col-md-4">
	      <h3 align="center">Social Media</h3>
	      <div align="center">
	      	<i class="fa fa-facebook fa-5x" aria-hidden="true"></i> &nbsp;&nbsp;
		    <i class="fa fa-twitter fa-5x" aria-hidden="true"></i> &nbsp;&nbsp;
		    <i class="fa fa-google-plus fa-5x" aria-hidden="true"></i>
	      </div>
	      
  		</div> 
  		<div class="col-md-4">
	   	  <h3 align="center">Lorem Ipsum</h3>
	   	  <p align="justifiy">
	   	  	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam animi saepe iste quas accusamus magnam, molestias voluptas suscipit! Id consequatur iste placeat aspernatur pariatur nisi doloremque quo tempore ipsa distinctio.
	   	  </p>
  		</div>
	</div>
	</div>
</div>
</div>