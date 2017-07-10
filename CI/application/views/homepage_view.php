<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
						  <!--<a class="shop" href="cart.html"><img src="<?php //echo base_url('images/cart.png') ?>" alt=""/></a>-->
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
							<?php echo form_open('index.php/Login/masuk')?>
							<input type="email" placeholder="Email Address" name="username" />
							<input type="password" placeholder="Masukkan password" name="password">
							<span>
								<?php 
									if (isset($error)) {
										echo $error;
									}
								?>
							</span>
							<button type="submit" class="btn btn-default">Login</button>
							<?php echo form_close(); ?>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<?php echo form_open('Login/registrasi')?>
							<input type="text" required="" 	name="nama" placeholder="Name" />
							<input type="email" required="" name="email" placeholder="Email Address"/>
							<span><?php echo form_error('email')?></span>
							<input type="password"	required="" name="pass" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						<?php echo form_close()?>
						<br><h2>Berhasil melakukan pendaftaran</h2>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
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

