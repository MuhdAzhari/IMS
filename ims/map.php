 <div class="container-fluid">
                <div class="card card-map">
					<div class="header">
                        <h4 class="title">HQ & Mining</h4>
                    </div>
					<div class="map">
						<div id="map"></div>
					</div>
				</div>
</div>
<script type="text/javascript">
    var locations = [
      ['Goh Teik Lim Quarry </br>(Lat:4.598833, Long:101.096026)', 4.598833, 101.096026,5],
      ['Sungei Piah Holding </br>(Lat:4.644272, Long:101.097789)',4.644272, 101.097789,4],
      ['Sunway Quarry Industries Sdn Bhd - Kuala Kangsar </br>(Lat:4.914234, Long:100.907971)', 4.914234, 100.907971, 3],
      ['DKLS Quarry & Premix Sdn Bhd (Lumut) </br>(Lat:4.200369, Long:100.643000)', 4.200369, 100.643000, 2],
      ['Pengurusan Pasir Perak </br>(Lat:4.665512, Long:101.073637)', 4.665512, 101.073637, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(4.665512, 101.073637),
      mapTypeId: google.maps.MapTypeId.HYBRID
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
  </script>