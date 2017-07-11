<div class="contact w3l-agileits">
<div class="container">
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506458.14088793925!2d110.3264427997159!3d-7.387004192883321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a73e2eb7ff211%3A0x3027a76e352bc80!2sKabupaten+Boyolali%2C+Jawa+Tengah!5e0!3m2!1sid!2sid!4v1493668720000" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Nama Lokasi : <div class="input-group margin">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
    </div> -->

    <div class="hero-unit">
    <div id="locationField">
      <input id="autocomplete" class="span6" placeholder="Ketik Alamat yang anda cari"
             onFocus="geolocate()" type="text"></input>
    </div>

    <table id="address">
      <tr>
        <td class="label">Nama Jalan</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Kota</td>
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Provinsi</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Kode Pos</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Negara</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>
	</div>

    <div class="col-md-6">
    	<h3 class="bars">Tempat Wisata</h3>
			<ol>
			<?php $no=1; foreach($wisata as $a){ ?>
				<li class="list-group-item1"><a href="<?php echo base_url()?>index.php/detailwisata/<?php echo $a->id_wisata; ?>"><?php echo $a->nama_wisata; ?></a></li>
			<?php $no++;
		      // if ($no>4) {
		      //  break;
		      // }
		    } ?>
			</ol>
    </div>
    <div class="col-md-6">
    	<h3 class="bars">Tempat Penginapan</h3>
			<ol>
			<?php $no=1; foreach($penginapan as $a){ ?>
				<li class="list-group-item1"><a href="<?php echo base_url()?>index.php/detailpenginapan/<?php echo $a->id_penginapan; ?>"><?php echo $a->nama_penginapan; ?></a></li>
			<?php $no++;
			// if ($no>4) {
			// 	break;
			// }
			} ?>
			</ol>
    </div>
</div>
</div>
