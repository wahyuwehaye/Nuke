<?php
  $CI =& get_instance();
  $CI->load->model('m_dashboard');
?>
<!-- <div class="single w3l-agileits">
    <div class="container">
    <div class="com">
    <h3>Kategori Wisata > Wisata Belanja</h3>
    <ul class="media-list"> -->
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
          <a href="#">Lanjutkan Membaca...</a>
        </div>
      </li> -->
     <!--  <?php $no=1; foreach($belanja as $a){ ?>
      <li class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object img-responsive" src="<?php echo base_url()?>assets/images/4.png" alt="" />
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $a->nama_wisata; ?></h4>
          <?php echo $a->ket_wisata; ?>
          <a href="#">Lanjutkan Membaca...</a>
        </div>
      </li>
      <?php $no++;
      // if ($no>4) {
      // 	break;
      // }
      } ?> -->
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
          <a href="#">Lanjutkan Membaca...</a>
        </div>
      </li> -->
<!--     </ul>
</div>
</div>
</div> -->


<!-- Versi 2 -->

<!-- about -->
  <div class="about w3l-agileits">
    <div class="container">
      <h3>Kategori Wisata > Wisata Belanja</h3>
      <?php $no=1; foreach($belanja as $a){ ?>
      <div class="about-grids col-md-6">
        <div class="about-grid">
          <?php
            $dapetgambarbelanja = "";
            $getgambar =$CI->db->query('select gambar from gambar_wisata where id_wisata="'.$a->id_wisata.'"');
            foreach ($getgambar->result() as $row){
                $dapetgambarbelanja = $row->gambar;
                // break;
            }
          ?>
          <?php
          if ($dapetgambarbelanja=="") {
            ?>
              <img src="<?php echo base_url()?>assets/images/tanya.png" alt=" " class="img-responsive" />
            <?php
          }else{
            ?>
              <img src="<?php echo base_url()?>upload-foto/<?php echo $dapetgambarbelanja; ?>" alt=" " class="img-responsive" />
            <?php
          }
          ?>
          <!-- <img src="<?php echo base_url()?>assets/images/2.jpg" alt=" " class="img-responsive" /> -->
          <div class="img-bottom">
            <p><?php echo $a->nama_wisata; ?></p>
          </div>
        </div>
        <!-- <div class="col-md-4 about-grid">
          <img src="<?php echo base_url()?>assets/images/3.jpg" alt=" " class="img-responsive" />
          <div class="img-bottom">
            <p>accusamus et iusto odio malesuada</p>
          </div>
        </div>
        <div class="col-md-4 about-grid">
          <img src="<?php echo base_url()?>assets/images/9.jpg" alt=" " class="img-responsive" />
          <div class="img-bottom">
            <p>accusamus et iusto odio malesuada</p>
          </div>
        </div> -->
        <div class="clearfix"> </div>
      </div>
      <div class="about-grids-bottom col-md-6">
        <div class="about-us">
          <h4>Keterangan</h4>
          <p><?php echo $a->ket_wisata; ?></p>
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
        <a href="<?php echo base_url()?>index.php/detailwisata/<?php echo $a->id_wisata; ?>">Lanjutkan Membaca...</a>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-12"></div>
      <?php $no++;
      // if ($no>4) {
      //  break;
      // }
      } ?>
    </div>
  </div>
