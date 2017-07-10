<!DOCTYPE html>
<html>
<head>
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Single :: w3layouts</title>
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->

<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/form.css') ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="<?php echo base_url('assets/js/jquery.easydropdown.js') ?>"></script>
<link href="<?php echo base_url('assets/css/nav.css') ?>" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo base_url('assets/js/scripts.js') ?>" type="text/javascript"></script>
<!--js-->

<!---- start-smoth-scrolling---->



</head>
<body>
<!--banner-->
<script src="<?php echo base_url('assets/js/responsiveslides.min.js') ?>"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						  <a href="<?php echo site_url('index.php/guiservlet/index'); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
				     	 <li class="dropdown1"><a href="<?php echo site_url('index.php/guiservlet/show_sepeda'); ?>">RENT</a>
						 </li>
						 <li class="dropdown1"><a href="<?php echo site_url('index.php/guiservlet/show_contacts'); ?>">CONTACT</a>
						 </li>
						 <li class="dropdown1"><a href="<?php echo site_url('index.php/login/index'); ?>">LOGIN</a>
						 </li>             
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="product">
	 <div class="container">
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <?php foreach ($sepeda as $spd ): ?>
				 <div class="single-page">
				 
					 <div class="product-head">
						<a href="index.html">Home</a> <span>::</span>	
						</div>
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="<?php echo base_url('assets/css/etalage.css') ?>">
						<script src="<?php echo base_url('assets/js/jquery.etalage.min.js') ?>"></script>
				<script>
					jQuery(document).ready(function($){

						$('#etalage').etalage({
							thumb_image_width: 400,
							thumb_image_height: 400,
							source_image_width: 800,
							source_image_height: 1000,
							show_hint: true,
							click_callback: function(image_anchor, instance_id) {
								alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
							}
						});

					});
				</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						 <div class="grid images_3_of_2">
						  <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php
										$gambar_sepeda = ['src'=>'assets/img/'.$spd->gambar_sepeda];
										echo base_url($gambar_sepeda);
										?>" class="img-responsive" />
									<img class="etalage_source_image" src="<?php
										$gambar_sepeda = ['src'=>'assets/img/'.$spd->gambar_sepeda];
										echo base_url($gambar_sepeda);
										?>" class="img-responsive" title="" />
								</a>
							</li>
						</ul>
						</div>
					 </div>
					 <div class="details-left-info">
							<h3>ID : <?php echo $spd->id_sepeda; ?></h3>
								<h4>Status : Available</h4>
							<h4></h4>
							<p><label>Rp</label><?php echo $spd->harga_sewa; ?>/Hari</p>
							<div class="btn_form">
								<a href="<?php echo site_url('index.php/guiservlet/show_form/'.$spd->id_sepeda); ?>">rent now</a>
							</div>
							<div class="bike-type">
							<p>TYPE  :<a href="#"><?php echo $spd->tipe_sepeda; ?></a></p>
							<p>COLOUR  :<a href="#"><?php echo $spd->warna_sepeda; ?></a></p>
							</div>
					 </div>
					 <div class="clearfix"></div>				 	
				  </div>
				  <?php endforeach; ?>
			  </div>
		  </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			  <a href="<?php echo site_url('index.php/guiservlet/index'); ?>"><img src="<?php echo base_url('assets/images/logo2.png'); ?>" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="<?php echo site_url('index.php/guiservlet/show_sepeda'); ?>">RENT</a></li>
				 <li><a href="<?php echo site_url('index.php/guiservlet/show_contacts'); ?>">CONTACT</a></li>
				 <li><a href="<?php echo site_url('index.php/login/index'); ?>">LOGIN</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>
