<!--footer-->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 footer-grids w3l-agileits">
					<h2><a href="<?php echo base_url()?>">Wonderful Boyolali</a></h2>
					<p><a href="mailto:info@example.com">contact@boyolali.com</a></p>
					<p>+2 000 222 1111</p>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>

							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Navigation</h3>
					<ul class="b-nav">
						<li><a href="<?php echo base_url()?>">Home</a></li>
						<li><a href="<?php echo base_url()?>index.php/sejarah">Tentang Boyolali</a></li>
						<li><a href="<?php echo base_url()?>index.php/alam">Kategori Wisata</a></li>
						<li><a href="<?php echo base_url()?>index.php/penginapan">Penginapan</a></li>
						<li><a href="<?php echo base_url()?>index.php/lokasi">Cari Lokasi</a></li>
						<?php if(isset($_SESSION['logged_in']))
							{ ?>
                        <li><a href="<?php echo base_url()?>index.php/dashboard/logOut">Logout</a></li>
                        <?php }else{ ?>
                        <li><a href="<?php echo base_url()?>index.php/login">Registrasi</a></li>
                        <?php } ?>
					</ul>
				</div>
				<div class="col-md-2 footer-grids w3l-agileits">
					<h3>Galeri Foto</h3>
					<ul class="b-nav">
						<li><a href="http://bit.ly/2p2cU1E">Photo Gallery</a></li>
						<li><a href="http://bit.ly/2p2cU1E">Foto-foto</a></li>
						<li><a href="http://bit.ly/2p2cU1E">lainnya</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom wtrhee-agileinfo">
		<div class="container">
			<p>Copyright &copy; 2017 Wonderful Boyolali. All Rights Reserved</p>
		</div>
	</div>
<!--//footer-->
<!-- for bootstrap working -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
