<?php
	$CI =& get_instance();
	$CI->load->model('m_dashboard');
?>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<?php $no=1; foreach($berita as $a){ ?>
				<div class="col-md-3 banner-bottom-grid w3-agileits">
					<?php
						$dapetgambarberita = "";
						$getgambar =$CI->db->query('select gambar from gambar_berita where id_berita="'.$a->id_berita.'"');
						foreach ($getgambar->result() as $row){
						    $dapetgambarberita = $row->gambar;
						    // break;
						}
					?>
					<?php
						if ($dapetgambarberita=="") {
							?>
								<img src="<?php echo base_url()?>assets/images/tanya.png" alt=" " width="280" height="180" />
							<?php
						}else{
							?>
								<img src="<?php echo base_url()?>upload-foto/<?php echo $dapetgambarberita; ?>" alt=" " width="280" height="180" />
							<?php
						}
					?>
					<!-- <img src="<?php echo base_url()?>assets/images/1.jpg" alt=" " class="img-responsive" /> -->
					<div class="banner-bottom-grid-info">
						<div class="col-xs-4 banner-bottom-grid-infol">
							<p>NEW</p>
						</div>
						<div class="col-xs-8 banner-bottom-grid-infor">
							<h3><?php echo $a->judul_berita; ?></h3>
						</div>
						<div class="clearfix"> </div>
						<p class="vel">CP Berita : <?php echo $a->cp_berita; ?></p>
							<div class="more">
								<a href="<?php echo base_url()?>index.php/detailberita/<?php echo $a->id_berita; ?>">Learn More</a>
							</div>
					</div>
				</div>
				<?php $no++;
				if ($no>4) {
					break;
				}
			 	} ?>
				<!-- <div class="col-md-3 banner-bottom-grid w3-agile">
					<img src="<?php echo base_url()?>assets/images/2.jpg" alt=" " class="img-responsive" />
					<div class="banner-bottom-grid-info">
						<div class="col-xs-4 banner-bottom-grid-infol">
							<p>NEW</p>
						</div>
						<div class="col-xs-8 banner-bottom-grid-infor">
							<h3>Judul Berita Terbaru</h3>
						</div>
						<div class="clearfix"> </div>
						<p class="vel">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
								quam nihil molestiae consequatur.</p>
							<div class="more">
								<a href="<?php echo base_url()?>assets/single.html">Learn More</a>
							</div>
					</div>
				</div>
				<div class="col-md-3 banner-bottom-grid w3-agile">
					<img src="<?php echo base_url()?>assets/images/3.jpg" alt=" " class="img-responsive" />
					<div class="banner-bottom-grid-info">
						<div class="col-xs-4 banner-bottom-grid-infol">
							<p>NEW</p>
						</div>
						<div class="col-xs-8 banner-bottom-grid-infor">
							<h3>Judul Berita Terbaru</h3>
						</div>
						<div class="clearfix"> </div>
						<p class="vel">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
								quam nihil molestiae consequatur.</p>
							<div class="more">
								<a href="<?php echo base_url()?>assets/single.html">Learn More</a>
							</div>
					</div>
				</div>
				<div class="col-md-3 banner-bottom-grid w3-agile">
					<img src="<?php echo base_url()?>assets/images/4.jpg" alt=" " class="img-responsive" />
					<div class="banner-bottom-grid-info">
						<div class="col-xs-4 banner-bottom-grid-infol">
							<p>NEW</p>
						</div>
						<div class="col-xs-8 banner-bottom-grid-infor">
							<h3>Judul Berita Terbaru</h3>
						</div>
						<div class="clearfix"> </div>
						<p class="vel">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
								quam nihil molestiae consequatur.</p>
							<div class="more">
								<a href="<?php echo base_url()?>assets/single.html">Learn More</a>
							</div>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			</br>
			<a href="<?php echo base_url()?>index.php/allberita" type="button" class="btn btn-block btn-primary">Lihat Semua Berita</a>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- testimonials -->
	<div class="testimonials w3l-agileits">
		<div class="container">
			<h3>Event dan Festifal</h3>
			<div class="testimonials-grids">
				<ul id="flexiselDemo1">
					<?php $no=1; foreach($event as $a){ ?>
					<li>
						<div class="testimonials-grid">
							<div class="col-xs-5 testimonials-grid-left">
							<?php
								$dapetgambarevent = "";
								$getgambar =$CI->db->query('select gambar from gambar_event where id_event="'.$a->id_event.'"');
								foreach ($getgambar->result() as $row){
								    $dapetgambarevent = $row->gambar;
								    // break;
								}
							?>
							<?php
								if ($dapetgambarevent=="") {
									?>
										<img src="<?php echo base_url()?>assets/images/tanya.png" alt=" " class="img-responsive" />
									<?php
								}else{
									?>
										<img src="<?php echo base_url()?>upload-foto/<?php echo $dapetgambarevent; ?>" alt=" " class="img-responsive" />
									<?php
								}
							?>
								
							</div>
							<div class="col-xs-7 testimonials-grid-right">
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<?php
									$str="";
									if(strlen($a->ket_event) > 40){
										$str = substr($a->ket_event, 0, 38) . "...";
									}else{
										$str=$a->ket_event;
									}
								?>
								<p>Keterangan : <?php echo $str; ?><span><?php echo $a->nama_event; ?></span></p>
								<p><a href="<?php echo base_url()?>index.php/detailevent/<?php echo $a->id_event; ?>">Learn More</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<?php $no++;
					// if ($no>4) {
					// 	break;
					// }
				 	} ?>
					<!-- <li>
						<div class="testimonials-grid">
							<div class="col-xs-5 testimonials-grid-left">
								<img src="<?php echo base_url()?>assets/images/7.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-7 testimonials-grid-right">
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<p>Itaque earum rerum hic tenetur a sapiente delectus rerum hic tenetur.<span>James</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonials-grid">
							<div class="col-xs-5 testimonials-grid-left">
								<img src="<?php echo base_url()?>assets/images/8.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-7 testimonials-grid-right">
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<p>Itaque earum rerum hic tenetur a sapiente delectus rerum hic tenetur.<span>Micheal France</span></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li> -->
				</ul>

					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:2
										},
										tablet: {
											changePoint:768,
											visibleItems: 2
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.flexisel.js"></script>
<!--  -->
				<!-- 	<?php $no=1; foreach($event as $a){ ?>
				<div class="col-md-3 banner-bottom-grid w3-agileits">
					<img src="<?php echo base_url()?>assets/images/1.jpg" alt=" " class="img-responsive" />
					<div class="banner-bottom-grid-info">
						<div class="col-xs-4 banner-bottom-grid-infol">
							<p>NEW</p>
						</div>
						<div class="col-xs-8 banner-bottom-grid-infor">
							<h3><?php echo $a->nama_event; ?></h3>
						</div>
						<div class="clearfix"> </div>
						<p class="vel">Jenis Berita : <?php echo $a->jenis_event; ?></p>
							<div class="more">
								<a href="<?php echo base_url()?>index.php/detailevent/<?php echo $a->id_event; ?>">Learn More</a>
							</div>
					</div>
				</div>
				<?php $no++;
				if ($no>4) {
					break;
				}
			 	} ?> -->
			</div>
			</br>
			<a href="<?php echo base_url()?>index.php/allevent" type="button" class="btn btn-block btn-primary">Lihat Semua Event dan Festifal</a>
		</div>
		
	</div>
<!-- //testimonials -->
