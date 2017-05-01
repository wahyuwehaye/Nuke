<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<div class="blog-pag page">
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3>Tentang Boyolali > Sekilas Tentang Kabupaten Boyolali</h3>
						<p>Sumber : <a href="https://id.wikipedia.org/wiki/Kabupaten_Boyolali">Wikipedia</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<div class="blog-page-grids-bot">
						<img src="<?php echo base_url()?>assets/images/boyolali1.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="blog-page-grids-bot1">
                        <h4>Gunung Merapi dan Gunung Merbabu</h4>
						<p>Terletak 25 km dari Kota Boyolali kearah barat. Obyek Wisata Gunung Merapi salah satu gunung yang teraktif di dunia, selain itu pemandangan alamnya sangat indah serta panorama alam masih asli. Bagi pecinta alam yang senang berpetualang merupakan jalur terpendek untuk mencapai puncak gunung Merapi 4 jam dan untuk mencapai puncak gunung Merbabu 8 jam. Dengan mendaki puncak Merapi para pendaki dapat melihat matahari terbit "Sun Rise."

Setiap malam 1 Suro diadakan Upacara Tradisional Sedekah Gunung sebagai perwujudan rasa syukur masyarakat kepada Tuhan Yang Maha Esa. Lonjakan wisata pendakian pada menjelang tgl 1 Suro, Tahun Baru, 17 Agustus (Pengibaran Bendera Merah Putih di Puncak Merapi).reog jathilan campursari MEGO MENDUNG ds.Randukuning Lampar Musuk Boyolali

Fasilitasnya antara lain TIC (Tourism Information Centre) Joglo Merapi I, Home Theatre New Selo, Wall Climbing, Lapangan Tenis, Gedung Diklat, Bungalow Tersenyum, Home Stay, Warung Makan/ Makanan Khas Selo, Souvenir.

Wisata susur sungai dan air terjur di lereng timur Merbabu mulai menjadi favorit di Boyolali, jalur susur sungai yang dimulai dari samping situs sejarah Makam dan Masjid Ki Ageng Pantaran yang berlokasi di Desa Candisari, Kecamatan Ampel, menempuh perjalanan sekitar 1 jam hingga persimpangan sungai (tempuran) di kaki bukit Ogal Agil. Di sebelah utara tempuran (sebelah kanan) terdapat air terjun, dan bila perjalanan diteruskan ke kanan hingga hulu sungai yang bernama Semuncar akan menemui 4 air terjun yang indah. Petualangan susur sungai ke Semuncar melalui medan alami tetapi masih memungkinkan pemula untuk sampai hulu. Perjalanan ke kiri tempuran akan menuju hulu yang bernama Sipendok. Perjalanan ke Sipendok disarankan untuk petualang yang sudah berpengalaman. Mitos-mitos terkait dengan Semuncar dan Sipendok masih kuat pada masyarakat sekitarnya. Bukit Ogal Agil juga dipercaya masyarakat setempat sebagai bukit dalam legenda Baru Klinting. Daerah Semuncar dan Sipendok merupakan daerah sumber air bagi masyarakat Ampel, sehingga pengunjung diharuskan menjaga lingkungan dan menghormati alam.</p>
					</div>
				</div>
			</div>
			</br></br>
			<div class="com">
				<h3>Comments</h3>
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
				<h3>Leave a Comments Here</h3>
			    <form action="<?php echo base_url()?>index.php/dashboard/insertKomenTentang" method="post">
					<!-- <input type="text" name="text" placeholder="Name" required=" "> -->
				<?php $page = $this->uri->segment(1, 0); ?>
				<?php if(isset($_SESSION['logged_in']))
					{ ?>
					<input type="hidden" name="id_tentang" value="3">
					<input type="hidden" name="page" value="<?php echo $page; ?>">
					<input type="hidden" name="nama" value="<?php echo ($_SESSION['username']); ?>" required=" ">
				<?php }else{ ?>
					<input type="text" name="nama" placeholder="Name" required=" ">
					<input type="text" name="email" placeholder="Email" required=" ">
					<input type="text" name="website" placeholder="Website" required=" ">
					<input type="hidden" name="id_tentang" value="3">
					<input type="hidden" name="page" value="<?php echo $page; ?>">
				<?php } ?>
					<textarea name="komentar" placeholder="Meassage" required=" "></textarea>
					<input type="submit" value="Leave A Comment">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<!-- //single -->
