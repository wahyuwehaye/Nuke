<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Input Lokasi</h4>
                            <!-- <p class="category">Here is a subtitle for this table</p> -->
                            <!-- <button class="btn btn-xs btn-success" onclick="add_berita()"><i class="material-icons">library_add</i></button>
                            <button class="btn btn-xs btn-warning" onclick="reload_table()"><i class="material-icons">refresh</i></button> -->
                        </div>
                        <div class="card-content">
						    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506458.14088793925!2d110.3264427997159!3d-7.387004192883321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a73e2eb7ff211%3A0x3027a76e352bc80!2sKabupaten+Boyolali%2C+Jawa+Tengah!5e0!3m2!1sid!2sid!4v1493668720000" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<!-- <div id="map" style="width: 650px; height: 300px;"></div>

						  <script type="text/javascript">
						  //   var locations = [
						  //  <?php
						  //           include('inc/config.php');
						  //           	$sql_lokasi="select idlokasi,nama,lat,lng
						  //           	from lokasi  ";
						  //           	$result=mysql_query($sql_lokasi) or die(mysql_error());
						  //           	while($data=mysql_fetch_object($result)){
						  //           		 ?>
						  //           		    ['<?=$data->nama;?>', <?=$data->lat;?>, <?=$data->lng;?>],
						  //      <?
								// 		}
								// ?>
								
						    
						  //   ];

						    var map = new google.maps.Map(document.getElementById('map'), {
						      zoom: 12,
						      center: new google.maps.LatLng(-7.518134, 110.592306),
						      mapTypeId: google.maps.MapTypeId.ROADMAP
						    });

						    var infowindow = new google.maps.InfoWindow();

						    var marker, i;

						    for (i = 0; i < locations.length; i++) {  
						      marker = new google.maps.Marker({
						        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						        map: map
						      });

						      google.maps.event.addListener(marker, 'click', (function(marker, i) {
						        return function() {
						          infowindow.setContent(locations[i][0]);
						          infowindow.open(map, marker);
						        }
						      })(marker, i));
						    }
						  </script> -->
                    </div>
                </div>
            </div>
        </div>
    </div>