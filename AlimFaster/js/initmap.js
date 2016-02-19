function initialize(p0, p1, p2, p3) {
var locations = [
[p0, p1, p2, p3],
      /*['Bondi Beach', -33.890542, 151.274856, 'url1'],
      ['Coogee Beach', -33.923036, 151.259052, 'url2'],
      ['Cronulla Beach', -34.028249, 151.157507, 'url3'],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 'url4'],
      ['Maroubra Beach', -33.950198, 151.259302, "1"]*/
    ];

    var map = new google.maps.Map(document.getElementById('mimapa'), {
      zoom: 8,
      center: new google.maps.LatLng(-1.7860237,-80.3814269),
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
          infowindow.setContent(locations[i][0]+"<br/><a href='"+locations[i][3]+"'>IR A SITIO</>");
          infowindow.open(map, marker);
        }
      })(marker, i));
	  
	  infowindow.setContent(locations[i][0]+"<br/><a href='"+locations[i][3]+"'>IR A SITIO</>");
	  infowindow.open(map, marker); 
    }   
}
//marker.setMap(map);//asi inicializo el marker dentro del mapa ya creado map +o-
//google.maps.event.addDomListener(window, 'load', initialize);//asi cargo en lugar de body onload
function firstInitialize(){
    var map = new google.maps.Map(document.getElementById('mimapa'), {
      zoom: 8,
      center: new google.maps.LatLng(-1.7860237,-80.3814269),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
	
	}