<?php
$active = "home";
require_once 'include/header.php';
require_once 'database.php';

?>

<script>
    $(document).ready(function() {
		
    });
</script>

<html>
  <head>
	<link rel="stylesheet" href="CSS/master.css" type="text/css">
  
	<h1>GoBus Transport App</h1>
  
	<p id="selectRoute">Select a Route:</p>
    
  </head>
  
  <body>

  </body>
</html>

<div id="map"></div>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBajjU1EoGpVz0QKgSL2c_aS6vJDb8N5cA&callback=initMap">
</script>
<script src="scripts/map.js"></script>

<?php
require_once 'include/footer.php';
?>