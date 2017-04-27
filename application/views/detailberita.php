<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<div class="blog-pag page">
			<?php $no=1; foreach($berita->result_array() as $row){ ?>
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3><?php echo $row['judul_berita'];?></h3>
						<p>Published on<span> <?php echo $row['tgl_berita'];?></span></p>
					</div>
					<div class="blog-page-grid1">
						<p><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php echo $row['jenis_berita'];?></a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<div class="blog-page-grids-bot">
						<img src="<?php echo base_url()?>assets/images/banner1.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="blog-page-grids-bot1">
						<p><?php echo $row['ket_berita'];?></p>
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
				<h3>Comments</h3>
				<ul class="media-list">
				  <li class="media">
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
				  </li>
				  <li class="media">
					<div class="media-left">
					  <a href="#">
						<img class="media-object img-responsive" src="<?php echo base_url()?>assets/images/4.png" alt="" />
					  </a>
					</div>
					<div class="media-body">
					  <h4 class="media-heading">Sandra Rickon</h4>
					  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
					  scelerisque ante sollicitudin commodo. Cras purus odio, 
					  vestibulum in vulputate at, tempus viverra turpis. 
					  <a href="#">Reply</a>
					</div>
				  </li>
				  <li class="media">
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
				  </li>
				</ul>
			</div>
			<div class="in dfg">
				<h3>Leave a Comments Here</h3>
			    <form action="#" method="post">
					<input type="text" name="text" placeholder="Name" required=" ">
					<input type="text" name="email" placeholder="Email" required=" ">
					<input type="text" name="website" placeholder="Website" required=" ">
					<textarea name="message" placeholder="Meassage" required=" "></textarea>
					<input type="submit" value="Leave A Comment">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
<!-- //single -->