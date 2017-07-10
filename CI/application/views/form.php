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

<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css') ?>" type="text/css"/>
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js') ?>" type="text/javascript"></script>

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
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
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
<?php foreach ($sepeda as $spd ): ?>
<div class="contact">
	<div class="container">
		<h3>RENT FORM</h3>
		<form action="<?php echo base_url(). 'index.php/guiservlet/add_peminjaman'; ?>" method="post">	
			 <input type="hidden" name="id_sepeda" value="<?php echo $spd->id_sepeda ?>">
			 <input class="user" type="text" value="ID Sepeda <?php echo $spd->id_sepeda; ?> (<?php echo $spd->tipe_sepeda; ?>) (<?php echo $spd->warna_sepeda; ?>)" required="" name="id_sepeda_show" disabled><br>
			 <input type="text" id="datepicker" placeholder="Tanggal Sewa" required="" name="tanggal_sewa">
			 <input type="text" id="datepicker1" placeholder="Tanggal Kembali" required="" name="tanggal_kembali"><br>
			 <input class="user" type="text" placeholder="Total Sewa" required="" name="total_sewa"><br>
			 <input class="user" type="text" placeholder="Nama Peminjam" name="nama_peminjam" required=""><br>
			 <input type="submit" value="RENT">
		</form>
	</div>
</div>
<?php endforeach; ?>
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