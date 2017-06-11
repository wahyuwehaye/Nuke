<?php
	$CI =& get_instance();
	$CI->load->model('m_dashboard');
?>
<!-- about -->
	<div class="about w3l-agileits">
		<div class="container">
		<?php $no=1; foreach($wisata->result_array() as $row){ ?>
			<h3><?php echo $row['kategori_wisata'];?></h3>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<?php
						$dapetgambarwisata = "";
						$getgambar =$CI->db->query('select gambar from gambar_wisata where id_wisata="'.$row['id_wisata'].'"');
						foreach ($getgambar->result() as $bar){
						    $dapetgambarwisata = $bar->gambar;
						    // break;
						}
					?>
					<?php
					if ($dapetgambarwisata=="") {
						?>
							<img src="<?php echo base_url()?>assets/images/tanya.png" alt=" " class="img-responsive" />
						<?php
					}else{
						?>
							<img src="<?php echo base_url()?>upload-foto/<?php echo $dapetgambarwisata; ?>" alt=" " class="img-responsive" />
						<?php
					}
					?>
					<!-- <img src="<?php echo base_url()?>assets/images/2.jpg" alt=" " class="img-responsive" /> -->
					<div class="img-bottom">
						<p><?php echo $row['nama_wisata'];?></p>
					</div>
				</div>
				<div class="col-md-6 about-grid" style="text-align: justify;">
						<p>Alamat Wisata : <?php echo $row['alamat_wisata'];?></p></br>
						<p>Kategori Wisata : <?php echo $row['kategori_wisata'];?></p></br>
						<p>Harga Tiket Masuk : Rp. <?php echo number_format($row['harga_wisata'], 2, ",", ".");?> per Orang</p></br>
						<p>Contact Wisata : <?php echo $row['notelp_wisata'];?></p></br>
				</div>
				<!-- <div class="col-md-4 about-grid">
					<img src="images/3.jpg" alt=" " class="img-responsive" />
					<div class="img-bottom">
						<p>accusamus et iusto odio malesuada</p>
					</div>
				</div>
				<div class="col-md-4 about-grid">
					<img src="images/9.jpg" alt=" " class="img-responsive" />
					<div class="img-bottom">
						<p>accusamus et iusto odio malesuada</p>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="about-grids-bottom">
				<div class="col-md-12 about-us" style="text-align: justify;">
					<h4>Keterangan</h4>
					<p><?php echo $row['ket_wisata'];?></p>
				</div>
				<!-- <div class="col-md-4 about-us">
					<h4>Who We Are</h4>
					<p>Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
					nisl tempus convallis quis ac lactus.Sed porttitor lactus nibh.</p>
				</div>
				<div class="col-md-4 about-us">
					<h4>Why We Do This</h4>
					<p>Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
					nisl tempus convallis quis ac lactusnisl tempus convallis quis ac 
					lactus.Sed porttitor lactus nibhSed porttitor lactus nibh.</p>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="about-grids-bottom">
				<div class="col-md-12 about-us">
					<?php echo $map['html']; ?>
					<div id="directionsDiv"></div>
				</div>
				<div class="clearfix"> </div>
			</div>
		<?php $no++; } ?>
		<!--gallery-->
						<h3>Photo Lainnya</h3>
						<div class="top-gallery">
						<?php $no=1; foreach($gambarnya->result_array() as $gam){ ?>
							<div class="col-md-3 gallery-grid gallery1">
								<a href="<?php echo base_url()?>upload-foto/<?php echo $gam['gambar'];?>" class="swipebox">
									<img src="<?php echo base_url()?>upload-foto/<?php echo $gam['gambar'];?>" class="img-responsive" alt="/">
									<div class="textbox">
										<h4>Lihat Detail</h4>
										<!-- <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p> -->
									</div>
								</a>
							</div>
						<?php $no++; } ?>
							<div class="clearfix"> </div>
						</div>
						
						<link rel="stylesheet" href="<?php echo base_url()?>assets/css/swipebox.css">
								<!-- swipe box js -->
						<script src="<?php echo base_url()?>assets/js/jquery.swipebox.min.js"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
						</script>
						<!-- //swipe box js -->
			<!--//gallery-->
			</br></br></br>

		<div class="com">
				<h3>Komentar</h3>
				<ul class="media-list">
				  <!-- <li class="media">
					<div class="media-left">
					  <a href="#">
						<img class="media-object img-responsive" src="<?php echo base_url()?>assets/images/3.png" alt="" />
					  </a>
					</div>
					<div class="media-body">
					  <h4 class="media-heading">Simmy</h4>
					  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
					  scelerisque ante sollicitudin commodo. Cras purus odio, 
					  vestibulum in vulputate at, tempus viverra turpis. 
					  <a href="#">Reply</a>
					</div>
				  </li> -->
				  <?php $no=1; foreach($komen->result_array() as $row){ ?>
				  <li class="media">
					<div class="media-left">
					  <a href="#">
						<img class="media-object img-responsive" src="<?php echo base_url()?>assets/images/4.png" alt="" />
					  </a>
					</div>
					<div class="media-body">
					  <h4 class="media-heading"><?php echo $row['nama'];?></h4>
					  <?php echo $row['komentar'];?>
					  <a href="#"><?php echo $row['tgl_komentar'];?></a>
					</div>
				  </li>
				  <?php $no++; } ?>
				  <!-- <li class="media">
					<div class="media-left">
					  <a href="#">
						<img class="media-object img-responsive" src="<?php echo base_url()?>assets/images/5.png" alt="" />
					  </a>
					</div>
					<div class="media-body">
					  <h4 class="media-heading">Jhon Willium</h4>
					  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
					  scelerisque ante sollicitudin commodo. Cras purus odio, 
					  vestibulum in vulputate at, tempus viverra turpis. 
					  <a href="#">Reply</a>
					</div>
				  </li> -->
				</ul>
			</div>
			<div class="in dfg">
				<h3>Tinggalkan Komentar Disini</h3>
			    <form action="<?php echo base_url()?>index.php/dashboard/insertKomenWisata" method="post">
					<!-- <input type="text" name="text" placeholder="Name" required=" "> -->
				<?php $id_wisata = $this->uri->segment(2, 0); ?>
				<?php if(isset($_SESSION['logged_in']))
					{ ?>
					<input type="hidden" name="id_wisata" value="<?php echo $id_wisata; ?>">
					<input type="hidden" name="nama" value="<?php echo ($_SESSION['username']); ?>" required=" ">
				<?php }else{ ?>
					<input type="text" name="nama" placeholder="Name" required=" ">
					<input type="text" name="email" placeholder="Email" required=" ">
					<input type="text" name="website" placeholder="Website" required=" ">
					<input type="hidden" name="id_wisata" value="<?php echo $id_wisata; ?>">
				<?php } ?>
					<textarea name="komentar" placeholder="Isi komentar" required=" "></textarea>
					<input type="submit" value="Komentar">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>