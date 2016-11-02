<!DOCTYPE html>
<html>
<head>
<body>

<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
	<script src="http://gisak.vsb.cz/ruzicka/lib/leaflet/showplace.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
	
	setMap('mapid');
		$("#mapid").hide();
		
		$("strong").click(function(){
			
			$("#mapid").show();
			
			var lat = $(this).attr("lat");
			var lon = $(this).attr("lon");
			var zoom = $(this).attr("zoom");
			var text = $(this).attr("text");
			
			showPlace(lat, lon, zoom, text);
			
		$("body").click(function(){
			$(this).hide();
		});
	});
</script>
</head>
<body>

<div style="color:#0000FF">
<p>Zdravim</p>

  <p>programovani mi moc nejde</p>
  
  <p>ale snazim se!!</p>
</div>

<p><strong lat="49.56" lon="17.53" zoom="10" text="Zde je <strong>Opava</strong>">Opava</strong> je pěkné město</p>

<div id="mapid" style="width: 600px; height: 400px;"></div>

</body>
</html>