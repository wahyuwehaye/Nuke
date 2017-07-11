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
<!-- <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> -->
<!-- js -->
<!-- <script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script> -->
<!-- //js -->
<!-- /fonts -->
<!-- <link href='<?php echo base_url()?>assets/fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>assets/fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> -->
<!-- cari peta -->
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<!-- <link href="assetspeta/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="assetspeta/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="assetspeta/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
<!-- //fonts -->

<!--
Yang Baru
-->

<!-- JS buat cari peta -->
<script>

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initialize() {

  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
      { types: ['geocode'] });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    fillInAddress();
  });
}


function fillInAddress() {
  
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }


  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}


    </script>
    <!-- tutup JS cari peta -->

</head>

<body onload="initialize()">
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
