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

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assetsupload/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assetsupload/basic.min.css">


<style type="text/css">

body{
	background-color: #E8E9EC;
}

.dropzone {
	margin-top: 100px;
	border: 2px dashed #0087F7;
}

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
					<li class="<?php echo ($active_menu=="notifikasi") ? "active" :""; ?> treeview">
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
	                </li>
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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Upload Gambar Berita</h4>
                            <p class="category">Untuk melengkapi informasi dari Berita</p>
                        </div>
                        <div class="card-content">
                            <div class="dropzone">
                        <?php $id_berita = $this->uri->segment(2, 0); ?>
                              <div class="dz-message">
                               <h3> Klik atau Drop gambar disini</h3>
                               <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>">
                              </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="<?php echo base_url()?>assets3/img/faces/marc.jpg" />
                            </a>
                        </div>

                        <div class="content">
                            <h6 class="category text-gray">CEO / Co-Founder</h6>
                            <h4 class="card-title">Alec Thompson</h4>
                            <p class="card-content">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Wonderful Boyolali</a>, made with love for a better web
        </p>
    </div>
</footer>
</div>
</div>

<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets3/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets3/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url()?>assets3/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets3/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url()?>assets3/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets3/js/demo.js"></script>

<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>


<script type="text/javascript" src="<?php echo base_url()?>assetsupload/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assetsupload/dropzone.min.js"></script>

<script type="text/javascript">


</script>

<script type="text/javascript">

Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url('index.php/upload/proses_upload') ?>",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
	a.token=Math.random();
	c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token=a.token;
	$.ajax({
		type:"post",
		data:{token:token},
		url:"<?php echo base_url('index.php/upload/remove_foto') ?>",
		cache:false,
		dataType: 'json',
		success: function(){
			console.log("Foto terhapus");
		},
		error: function(){
			console.log("Error");

		}
	});
});


</script>



</body>
</html>
