<div class="single w3l-agileits">
    <div class="container">
    <div class="com">
    <h3>Kategori Wisata > Wisata Belanja</h3>
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
          <a href="#">Lanjutkan Membaca...</a>
        </div>
      </li> -->
      <?php $no=1; foreach($belanja as $a){ ?>
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
      } ?>
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
    </ul>
</div>
</div>
</div>
