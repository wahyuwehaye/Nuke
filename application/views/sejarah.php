<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<div class="blog-pag page">
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3>Tentang Boyolali > Sejarah Kabupaten Boyolali</h3>
						<p>Sumber : <a href="http://www.boyolali.go.id/">Website Resmi Pemerintah Daerah Kabupaten Boyolali</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<!-- <div class="blog-page-grids-bot">
						<img src="<?php echo base_url()?>assets/images/boyolali.jpg" alt=" " class="img-responsive" />
					</div> -->
					<div class="blog-page-grids-bot1">
                        <h4>Kabupaten Boyolali</h4>
						<p>Cerita Rakyat Ki Ageng Pandan Arang, mulanya adalah sebuah legenda. Tentang terciptanya sebuah daerah di lereng gunung Merapi.
Sebuah cerita tentang Ki Ageng Pandan Arang, Bupati Semarang pada Abad XVI. Pada masanya, mendapat tugas dari Sunan Kalijaga untuk pergi ke Gunung Jabalakat di Tembayat (Klaten) guna menyebarkan agama Islam. Ki Ageng Pandan Arang yang juga disebut dengan Tumenggung Notoprojo ini banyak menemui rintangan dan ujian selama perjalanan. Ki Ageng Pandan Arang berjalan cukup jauh meninggalkan anak dan istri ketika di sebuah hutan belantara. Tiga orang perampok mencegatnya. Mengira harta benda dibawanya. Tempat
dimana Ki Ageng dibegal ini kemudian sekarang dikenal dengan nama Salatiga.
Di dalam perjalanan tersebut Nyai Ageng tertinggal jauh di belakang. Maka ucapnya, “Boya wis lali, Kyai teko ninggal aku” (R. Soewingyo, 1938: 12,20). Sumber lain menyebutkan: “Boya lali laki mami, adarbe garwa maring sun”. (Dr Soewito Santoso, 1970: 146). Sumber lain yang ditulis MS. Hanjoyo: Kira-kira 25 km dari Salatiga, dalam perjalanannya, Kyai Ageng Pandan Arang duduk di atas batu besar di tengah sungai, sambil menanti isteri dan anaknya yang masih jauh di belakang. Setelah lama dinanti tidak datang juga, Kyai Ageng berkata:
“Boya wis lali wong iki”. Tempat itu kemudian disebut dengan Boyolali. “
(Sejarah dan Hari Jadi Kabupaten Boyolali, Penulis Tim Peneliti Universitas Negeri Sebelas Maret, Surakarta: 1982).
Sebuah batu yang berada di Kali Pepe yang membelah Kota Boyolali diduga menjadi tempat beristirahat Ki Ageng Pandan Arang. Memang tidak ada bukti tertulis yang menunjukan bahwa batu ini adalah tempat beristirahat Ki Ageng Pandan Arang. Sama seperti sebuah batu yang
terletak di depan Pasar Sunggingan Boyolali yang menurut legenda adalah batu yang diketukketuk tongkatnya hingga muncul lekuk-lekuk mirip sebuah dakon. Karena mirip mainan dakon, masyarakat setempat menyebutnya dengan Mbah Dakon.
Hari Jadi Boyolali
Hari jadi Kabupaten Boyolali diperingati setiap 5 Juni, hal ini atas sebuah peristiwa sejarah yang terjadi pada 5 Juni 1847. Pada tanggal tersebut pemerintah Kasunanan Surakarta mengeluarkan peraturan baru tentang pemerintahan dhusun atau pemerintahan di luar Kuthanegara. Peratura tersebut dibuat atas campur tanga Belanda yang intinya pemerintahan yang sekarang tidak mampu lagi mengurusi segala urusan pemerintahan yang makin kompleks itu. Perjanjian antara Paku Buwana VII dengan Pemerintah Belanda tersebut termuat dalam Serat Perjanjian Dalem Natha halaman 140 – 146 atau dalam Staatsblad 1847 No. 30. Diktum dalam bab 30 – 36 dari perjanjian tersebut menyebutkan bahwa diperlukan adanya Abdi Dalem Gunung yang berkewajiban menjaga tata tertib dan ketentraman kerajaan yang bertugas pula mengurusi soal-soal pemerintahan.
Berdasarkan Staatsblad Tahun 1847 No.30 tersebut, Pemerintah Kasunanan Surakarta membentuk enam daerah Kabupaten Gunung di daerah-daerah sebagai pembantu pelaksana pemerintahan di daerah-daerah. Enam daerah kabupaten itu adalah: Kabupaten Gunung Kota
Surakarta, Kartosuro, Klaten, Boyolali, Ampel dan Sragen. (Pawarti Surakarta, 1939:71). Berdasarkan Staatsblad tersebut, kemudian ditentukan hari lahir Kabupaten Boyolali adalah 5 Juni 1847.
</p>
					</div>
				</div>
			</div>
			</br></br>
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
					<textarea name="komentar" placeholder="Isi Komentar" required=" "></textarea>
					<input type="submit" value="Komentar">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<!-- //single -->