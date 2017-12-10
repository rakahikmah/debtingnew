<div class="tab-content">
	 <div id="home" class="tab-pane fade in active">
 <div class="container-fluid header-image">		
	  <div class="container">
	  	<center>
	    <h1>Debting</h1>
	    <h2>The Mage Of Debt</h2>
	    <?php if ($this->session->has_userdata('role')): ?>
              <?php if ($this->session->userdata('role') =='admin'): ?>
                <a href="<?=site_url('admin')?>" class="btn btn-primary login-btn"><?=$this->session->userdata('nama')?></a>
              <?php else: ?>  
                <a href="<?=site_url('debitur')?>" class="btn btn-primary login-btn"><?=$this->session->userdata('nama')?></a>
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
</div>


	
</div>
</div>