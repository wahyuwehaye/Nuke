<?php
  $CI =& get_instance();
  $CI->load->model('m_dashboard');
?>
<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<div class="blog-pag page">
			<?php $no=1; foreach($penginapan->result_array() as $row){ ?>
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3><?php echo $row['nama_penginapan'];?></h3>
						<p>Date : <span> <?php echo date("Y-m-d");?></span></p>
					</div>
					<div class="blog-page-grid1">
						<!-- <p><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php echo $row['jenis_event'];?></a></p> -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<div class="blog-page-grids-bot">
					<?php
						$dapetgambarpenginapan = "";
						$getgambar =$CI->db->query('select gambar from gambar_penginapan where id_penginapan="'.$row['id_penginapan'].'"');
						foreach ($getgambar->result() as $bar){
						    $dapetgambarpenginapan = $bar->gambar;
						    // break;
						}
					?>
					<?php
					if ($dapetgambarpenginapan=="") {
						?>
							<img src="<?php echo base_url()?>assets/images/tanya.png" alt=" " class="img-responsive" />
						<?php
					}else{
						?>
							<img src="<?php echo base_url()?>upload-foto/<?php echo $dapetgambarpenginapan; ?>" alt=" " class="img-responsive" />
						<?php
					}
					?>
						<!-- <img src="<?php echo base_url()?>assets/images/banner1.jpg" alt=" " class="img-responsive" /> -->
					</div>
					<div class="blog-page-grids-bot1" style="text-align: justify;">
						<p>Nama Hotel : <?php echo $row['nama_penginapan'];?></p></br>
						<p>Alamat Hotel : <?php echo $row['alamat_penginapan'];?></p></br>
						<p>Daerah Hotel : <?php echo $row['daerah_penginapan'];?></p></br>
						<p>Harga Hotel : Rp. <?php echo number_format($row['harga_penginapan'], 2, ",", ".");?> per Malam</p></br>
						<p>Contact Hotel : <?php echo $row['cp_penginapan'];?></p></br>
						<p>Keterangan Hotel : <?php echo $row['ket_penginapan'];?></p></br>
						<ul>
							<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>User</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>Porttitor</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>5 Tags</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-bookmark" aria-hidden="true"></i>Tincidunt</a></li>
						</ul>
					</div>
				</div>
				<div class="about-grids-bottom">
				<div class="col-md-12 about-us">
					<?php echo $map['html']; ?>
					<div id="directionsDiv"></div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php $no++; } ?>
			</div>
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
			</br>
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
			    <form action="<?php echo base_url()?>index.php/dashboard/insertKomenPenginapan" method="post">
					<!-- <input type="text" name="text" placeholder="Name" required=" "> -->
				<?php $id_penginapan = $this->uri->segment(2, 0); ?>
				<?php if(isset($_SESSION['logged_in']))
					{ ?>
					<input type="hidden" name="id_penginapan" value="<?php echo $id_penginapan; ?>">
					<input type="hidden" name="nama" value="<?php echo ($_SESSION['username']); ?>" required=" ">
				<?php }else{ ?>
					<input type="text" name="nama" placeholder="Name" required=" ">
					<input type="text" name="email" placeholder="Email" required=" ">
					<input type="text" name="website" placeholder="Website" required=" ">
					<input type="hidden" name="id_penginapan" value="<?php echo $id_penginapan; ?>">
				<?php } ?>
					<textarea name="komentar" placeholder="Isi komentar" required=" "></textarea>
					<input type="submit" value="Komentar">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<!-- //single