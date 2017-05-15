<?php
	$CI =& get_instance();
	$CI->load->model('m_dashboard');
?>
<!-- single -->
	<div class="single w3l-agileits">
		<div class="container">
			<?php $no=1; foreach($penginapan as $a){ ?>
			<div class="blog-pag page">
				<div class="blog-page-grids">
					<div class="blog-page-grid">
						<h3><?php echo $a->nama_penginapan; ?></h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-page-grids-bottom">
					<div class="blog-page-grids-bot">
					<?php
						$dapetgambarpenginapan = "";
						$getgambar =$CI->db->query('select gambar from gambar_penginapan where id_penginapan="'.$a->id_penginapan.'"');
						foreach ($getgambar->result() as $row){
						    $dapetgambarpenginapan = $row->gambar;
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
					<div class="blog-page-grids-bot1">
						<p><?php echo $a->ket_penginapan; ?></p></br>
				<a href="<?php echo base_url()?>index.php/detailpenginapan/<?php echo $a->id_penginapan; ?>">Lanjutkan Membaca...</a>
					</div>
				</div>
			</div>
			<?php $no++;
			// if ($no>4) {
			// 	break;
			// }
			} ?>
		</div>
	</div>
<!-- //single -->
