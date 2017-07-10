<!DOCTYPE html>
<html>
<head>
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| 404 Error :: w3layouts</title>
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
<script src="js/responsiveslides.min.js"></script>
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
						 <li class="dropdown1"><a href="<?php echo site_url('index.php/guiservlet/show_loginpage'); ?>">LOGIN</a>
						 </li>
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
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#">
							<input type="text" placeholder="Name"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
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
				 <li><a href="<?php echo site_url('index.php/guiservlet/show_loginpage'); ?>">LOGIN</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>