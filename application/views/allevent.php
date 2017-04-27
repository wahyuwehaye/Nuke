<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<?php $no=1; foreach($event as $a){ ?>
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
						<p class="vel">Jenis Event : <?php echo $a->jenis_event; ?></p>
							<div class="more">
								<a href="<?php echo base_url()?>index.php/detailevent/<?php echo $a->id_event; ?>">Learn More</a>
							</div>
							</br>
					</div>
				</div>
				<?php $no++;
				// if ($no>4) {
				// 	break;
				// }
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
		</div>
	</div>
<!-- //banner-bottom -->
