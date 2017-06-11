<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets3/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets3/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Wonderful Boyolali</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>assets3/css/bootstrap.min.css" rel="stylesheet" />

	<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
	<!-- <link href="<?php echo base_url('assets/bootstrap-peta.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/peta.css')?>" rel="stylesheet">
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> -->

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url()?>assets3/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>assets3/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!-- This is what you need -->
  <script src="<?php echo base_url()?>sweetalert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">
  <!--.......................-->

	<!-- This is what you need -->
    <script src="<?php echo base_url()?>sweetalert/dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">

    <script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyBN1xK6HGm-o8Abc3q1EoljrMYDo44h9xo" type="text/javascript"></script>

	<style type="text/css">
	
	#mapa {width:100%; height:340px; border:5px solid #DEEBF2;}
	ul {font:10pt arial; margin-left:0px; padding:5px;}
	</style>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="<?php echo base_url()?>assets3/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="<?php echo base_url()?>index.php/user" class="simple-text"><img src="<?php echo base_url()?>assets/images/5.png" class="img-circle" alt="User Image" width="30" height="30">
				<?php echo ($_SESSION['username']); ?><?php if (($_SESSION['username'])=='admin') {
					echo "<i rel='tooltip' title='Verified' class='material-icons'>verified_user</i>";
				} ?>
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="<?php echo ($active_menu=="dashboard") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/dashboard">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="<?php echo ($active_menu=="admin") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/admin">
	                        <i class="material-icons">person_add</i>
	                        <p>Tambah Admin</p>
	                    </a>
	                </li>
	                <li class="<?php echo ($active_menu=="listadmin") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/listadmin">
	                        <i class="material-icons">recent_actors</i>
	                        <p>List Admin</p>
	                    </a>
	                </li>
                    <li class="<?php echo ($active_menu=="listuser") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/listuser">
	                        <i class="material-icons">view_list</i>
	                        <p>List Member</p>
	                    </a>
	                </li>
					<li class="<?php echo ($active_menu=="wisata") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/wisata">
	                        <i class="material-icons">pool</i>
	                        <p>Data Wisata</p>
	                    </a>
	                </li>
					<li class="<?php echo ($active_menu=="penginapan") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/dpenginapan">
	                        <i class="material-icons">local_hotel</i>
	                        <p>Data Penginapan</p>
	                    </a>
	                </li>
					<li class="<?php echo ($active_menu=="event") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/event">
	                        <i class="material-icons">event_note</i>
	                        <p>Kelola Event & Festival</p>
	                    </a>
	                </li>
					<li class="<?php echo ($active_menu=="berita") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/berita">
	                        <i class="material-icons">assignment</i>
	                        <p>Kelola Berita</p>
	                    </a>
	                </li>
					<!-- <li class="<?php echo ($active_menu=="notifikasi") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/notifikasi">
	                        <i class="material-icons">notifications</i>
	                        <p>Notifikasi</p>
	                    </a>
	                </li>
	                <li class="<?php echo ($active_menu=="inputlokasi") ? "active" :""; ?> treeview">
	                    <a href="<?php echo base_url()?>index.php/inputlokasi">
	                        <i class="material-icons">location_on</i>
	                        <p>Input Lokasi</p>
	                    </a>
	                </li> -->
	            </ul>
	    	</div>
	    </div>
		<div class="main-panel">
		    <nav class="navbar navbar-transparent navbar-absolute">
		        <div class="container-fluid">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="#" ><?php if ($active_menu=="dashboard") {
		                	echo "Dashboard";
		                }elseif ($active_menu=="admin") {
		                	echo "Tambah Admin";
		                }elseif ($active_menu=="listadmin") {
		                	echo "Table List Admin";
		                }elseif ($active_menu=="listuser") {
		                	echo "Table List Member";
		                }elseif ($active_menu=="wisata") {
		                	echo "Kelola Data Wisata";
		                }elseif ($active_menu=="penginapan") {
		                	echo "Kelola Data Penginapan";
		                }elseif ($active_menu=="event") {
		                	echo "Kelola Data Event dan Festival";
		                }elseif ($active_menu=="berita") {
		                	echo "Kelola Data Berita";
		                }elseif ($active_menu=="notifikasi") {
		                	echo "Notifikasi";
		                } ?></a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <li>
		                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
		                            <i class="material-icons">dashboard</i>
		                            <p class="hidden-lg hidden-md">Dashboard</p>
		                        </a>
		                    </li>
		                    <li class="dropdown">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                            <i class="material-icons">notifications</i>
		                            <span class="notification">5</span>
		                            <p class="hidden-lg hidden-md">Notifications</p>
		                        </a>
		                        <ul class="dropdown-menu">
		                            <li><a href="#">Mike John responded to your email</a></li>
		                            <li><a href="#">You have 5 new tasks</a></li>
		                            <li><a href="#">You're now friend with Andrew</a></li>
		                            <li><a href="#">Another Notification</a></li>
		                            <li><a href="#">Another One</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                           <i class="material-icons">person</i>
		                           <p class="hidden-lg hidden-md">Profile</p>
		                        </a>
		                        <ul class="dropdown-menu">
		                            <li><a href="<?php echo base_url()?>index.php/dashboard/logOut">Logout</a></li>
		                            </ul>
		                    </li>
		                </ul>

		                <form class="navbar-form navbar-right" role="search">
		                    <div class="form-group  is-empty">
		                        <input type="text" class="form-control" placeholder="Search">
		                        <span class="material-input"></span>
		                    </div>
		                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
		                        <i class="material-icons">search</i><div class="ripple-container"></div>
		                    </button>
		                </form>
		            </div>
		        </div>
		    </nav>
