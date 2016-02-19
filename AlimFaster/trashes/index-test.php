<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyABcvzwpua9QIgDkzdG_afvS0IHC40g_Gs"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script>
function initialize() {
var locations = [
      ['Bondi Beach', -33.890542, 151.274856, 'url1'],
      ['Coogee Beach', -33.923036, 151.259052, 'url2'],
      ['Cronulla Beach', -34.028249, 151.157507, 'url3'],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 'url4'],
      ['Maroubra Beach', -33.950198, 151.259302, "1"]
    ];

    var map = new google.maps.Map(document.getElementById('mimapa'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
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
    }   
}
//marker.setMap(map);//asi inicializo el marker dentro del mapa ya creado map +o-
//google.maps.event.addDomListener(window, 'load', initialize);//asi cargo en lugar de body onload

</script>

<title>Consulta y Reservacion en restaurante</title>
<link href="css/lis.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="initialize()">

<div id="mimapa" style="width:100%;height:400px;"></div>
</body>
<script src="js/actions.js"></script>
</html>
