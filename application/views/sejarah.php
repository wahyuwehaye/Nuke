<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<div class="blog-pag page">
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3>Tentang Boyolali > Sejarah Kabupaten Boyolali</h3>
						<p>Sumber : <a href="https://id.wikipedia.org/wiki/Kabupaten_Boyolali">Wikipedia</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<div class="blog-page-grids-bot">
						<img src="<?php echo base_url()?>assets/images/boyolali.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="blog-page-grids-bot1">
                        <h4>Kabupaten Boyolali</h4>
						<p>Asal mula nama Boyolali menurut cerita serat Babad Pengging Serat Mataram, nama Boyolali tak disebutkan. Demikian juga pada masa Kerajaan Demak Bintoro maupun Kerajaan Pengging, nama Boyolali belum dikenal. Menurut legenda nama Boyolali berhubungan dengan ceritera Ki Ageng Pandan Arang (Bupati Semarang pada abad XVI. Alkisah, Ki Ageng Pandan Arang yang lebih dikenal dengan Tumenggung Notoprojo diramalkan oleh Sunan Kalijogo sebagai Wali penutup menggantikan Syeh Siti Jenar. Oleh Sunan Kalijogo, Ki Ageng Pandan Arang diutus untuk menuju ke Gunung Jabalakat di Tembayat (Klaten) untuk syiar agama Islam. Dalam perjalananannya dari Semarang menuju Tembayat Ki Ageng banyak menemui rintangan dan batu sandungan sebagai ujian. Ki Ageng berjalan cukup jauh meninggalkan anak dan istri ketika berada di sebuah hutan belantara dia dirampok oleh tiga orang yang mengira dia membawa harta benda ternyata dugaan itu keliru maka tempat inilah sekarang dikenal dengan nama Salatiga. Perjalanan diteruskan hingga sampailah disuatu tempat yang banyak pohon bambu kuning atau bambu Ampel dan tempat inilah sekarang dikenal dengan nama Ampel yang merupakan salah satu kecamatan di Boyolali. Dalam menempuh perjalanan yang jauh ini, Ki Ageng Pandan Arang semakin meninggalkan anak dan istri. Sambil menunggu mereka, Ki Ageng beristirahat di sebuah Batu Besar yang berada di tengah sungai. Dalam istirahatnya Ki Ageng berucap "Baya wis lali wong iki" yang dalam bahasa indonesia artinya "Sudah lupakah orang ini". Dari kata Baya Wis Lali/ maka jadilah nama Boyolali. Batu besar yang berada di Kali Pepe yang membelah kota Boyolali mungkinkah ini tempat beristirahat Ki Ageng Pandan Arang. Mungkin tak ada yang bisa menjawab dan sampai sekarang pun belum pernah ada meneliti tentang keberadaan batu ini. Demikian juga sebuah batu yang cukup besar yang berada di depan Pasar Sunggingan Boyolali, konon menurut masyarakat setempat batu ini dulu adalah tempat untuk beristirahat Nyi Ageng Pandan Arang. Dalam istirahatnya Nyi Ageng mengetuk-ngetukan tongkatnya di batu ini dan batu ini menjadi berlekuk-lekuk mirip sebuah dakon (mainan anak-anak tempo dulu). Karena batu ini mirip dakon, masyarakat disekitar Pasar Sunggingan menyebutnya mBah Dakon dan hingga sekarang batu ini dikeramatkan oleh penduduk dan merekapun tak ada yang berani mengusiknya.</p>
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
					<input type="hidden" name="id_tentang" value="1">
					<input type="hidden" name="page" value="<?php echo $page; ?>">
					<input type="hidden" name="nama" value="<?php echo ($_SESSION['username']); ?>" required=" ">
				<?php }else{ ?>
					<input type="text" name="nama" placeholder="Name" required=" ">
					<input type="text" name="email" placeholder="Email" required=" ">
					<input type="text" name="website" placeholder="Website" required=" ">
					<input type="hidden" name="id_tentang" value="1">
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
