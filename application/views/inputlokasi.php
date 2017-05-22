<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Input Lokasi</h4>
                            <p class="category">Klik pada Peta untuk mendapatkan Longitude dan Latitude</p>
                        </div>
                        <div class="card-content">
								<div id="mapa"></div>
								<div class="eventtext">
								<div>Lattitude: <span id="latspan"></span></div>

								<div>Longitude: <span id="lngspan"></span></div>
								<div>Lat Lng: <span id="latlong"></span></div>
								<div>Lattitude on click:
								<input type="text" id="Lattitudeclicked" style="width:300px; border:1px inset gray;"></span></div>
								<div>Longitude on click:
								<input type="text" id="Longitudeclicked" style="width:300px; border:1px inset gray;"></span></div>
								</div>
								<script type="text/javascript">
								if (GBrowserIsCompatible())
								{
								map = new GMap2(document.getElementById("mapa"));
								map.addControl(new GLargeMapControl());
								map.addControl(new GMapTypeControl(3));
								map.setCenter( new GLatLng(-7.4317773, 110.6883536), 11,0);

								GEvent.addListener(map,'mousemove',function(point)
								{
								document.getElementById('latspan').innerHTML = point.lat()
								document.getElementById('lngspan').innerHTML = point.lng()
								document.getElementById('latlong').innerHTML = point.lat() + ', ' + point.lng()
								});

								GEvent.addListener(map,'click',function(overlay,point)
								{
								document.getElementById('Lattitudeclicked').value = point.lat()
								document.getElementById('Longitudeclicked').value = point.lng()
								});
								}
								</script>
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