<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Wonderful Boyolali</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Workmanship Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- /fonts -->
<link href='<?php echo base_url()?>assets/fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>assets/fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!-- //fonts -->

<!--
Yang Baru
-->

</head>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <div class="logo">
  						<h1><a class="navbar-brand" href="<?php echo base_url()?>">Wonderful <br><br>Boyolali<span>Tempat Wisata Paling Indah</span></a></h1>
  					  </div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url()?>">Home</a></li>
                            <li class="dropdown">
                               <a href="<?php echo base_url()?>" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Tentang <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                   <li><a href="<?php echo base_url()?>index.php/sejarah">Sejarah Kabupaten Boyolali</a></li>
                                   <li><a href="<?php echo base_url()?>index.php/warisan">Warisan Kabupaten Boyolali</a></li>
                                   <li><a href="<?php echo base_url()?>index.php/sekilas">Sekilas Tentang Kabupaten Boyolali</a></li>
                               </ul>
                            </li>
                            <li class="dropdown">
                               <a href="<?php echo base_url()?>" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Kategori <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                   <li><a href="<?php echo base_url()?>index.php/alam">Wisata Alam</a></li>
                                   <li><a href="<?php echo base_url()?>index.php/kuliner">Wisata Kuliner</a></li>
                                   <li><a href="<?php echo base_url()?>index.php/belanja">Wisata Belanja</a></li>
                               </ul>
                            </li>
							<li><a href="<?php echo base_url()?>index.php/penginapan">Penginapan</a></li>
							<li><a href="<?php echo base_url()?>index.php/lokasi">Lokasi</a></li>
							<?php if(isset($_SESSION['logged_in']))
							{ ?>
								<li><a href="<?php echo base_url()?>index.php/dashboard/logOut" >LOGOUT</a></li>

							<?php }else{ ?>
							<li><a href="<?php echo base_url()?>index.php/login">Register</a></li>
							<?php } ?>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
