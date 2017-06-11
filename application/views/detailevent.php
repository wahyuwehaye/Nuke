<?php
  $CI =& get_instance();
  $CI->load->model('m_dashboard');
?>
<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<div class="blog-pag page">
			<?php $no=1; foreach($event->result_array() as $row){ ?>
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3><?php echo $row['nama_event'];?></h3>
						<p>Published on<span> <?php echo $row['tgl_event'];?></span></p>
					</div>
					<div class="blog-page-grid1">
						<!-- <p><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php echo $row['jenis_event'];?></a></p> -->
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<div class="blog-page-grids-bot">
					<?php
						$dapetgambarevent = "";
						$getgambar =$CI->db->query('select gambar from gambar_event where id_event="'.$row['id_event'].'"');
						foreach ($getgambar->result() as $bar){
						    $dapetgambarevent = $bar->gambar;
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
						<!-- <img src="<?php echo base_url()?>assets/images/banner1.jpg" alt=" " class="img-responsive" /> -->
					</div>
					<div class="blog-page-grids-bot1">
						<p><?php echo $row['ket_event'];?></p>
						<ul>
							<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>User</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>Porttitor</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>5 Tags</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-bookmark" aria-hidden="true"></i>Tincidunt</a></li>
						</ul>
					</div>
				</div>
			<?php $no++; } ?>
			</div>
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
			    <form action="<?php echo base_url()?>index.php/dashboard/insertKomenEvent" method="post">
					<!-- <input type="text" name="text" placeholder="Name" required=" "> -->
				<?php $id_event = $this->uri->segment(2, 0); ?>
				<?php if(isset($_SESSION['logged_in']))
					{ ?>
					<input type="hidden" name="id_event" value="<?php echo $id_event; ?>">
					<input type="hidden" name="nama" value="<?php echo ($_SESSION['username']); ?>" required=" ">
				<?php }else{ ?>
					<input type="text" name="nama" placeholder="Name" required=" ">
					<input type="text" name="email" placeholder="Email" required=" ">
					<input type="text" name="website" placeholder="Website" required=" ">
					<input type="hidden" name="id_event" value="<?php echo $id_event; ?>">
				<?php } ?>
					<textarea name="komentar" placeholder="Isi Komentar" required=" "></textarea>
					<input type="submit" value="Komentar">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<!-- //single