
<!DOCTYPE html>
<html dir="ltr" lang="">
  <head>
  
    <title>PAW</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	
</head>
<body>
<form>
	Vrchni: <input name = "pocet"/>
	Prchni: <input name = "info"/>
	<input type = "submit"/>
</form>
	<h1>Schustkovky</h1>
	<p>
        <img src="https://freshjam.cz/wp-content/uploads/programator-automatizace-prace.jpg" alt="Jako pán" />
</p>
	 <p><a href="index.html">Zpět na hlavní stranu</a></p>
	 <ol>
<li>jupi jupi</li>
<li>a hele další jupi</li>
</ol>
<?php

	echo $_REQUEST["pocet"];	
	echo "<h3>zdraviiim všechny!</h3>";
	echo "<ol>";
	for ($i=0; $i<$_REQUEST["pocet"]; $i++) {
		$pomi = $i + i;
		echo $i.  "<h4>řádek</h4>";
	
	}
	echo "</ol>";	
?>

</body>
</html>