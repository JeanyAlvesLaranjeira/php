<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta http-equiv="refresh" content="1">
</head>

<body>
<?php
	
	date_default_timezone_set('America/Sao_Paulo');
	echo "<b> Hoje é dia </b>";
	echo date("d/M/Y");
	echo "<b> e são </b> ";
	echo date("h:i:s");
	echo " - " . date_default_timezone_get() . "<hr>";
	
	echo "<b> Hoje é dia </b>";
	echo date("d/m/y");
	echo "<b> e são </b> ";
	echo date("H:i:s");
	echo "<hr>";
	
	echo "<b> Hoje é dia </b>";
	echo date("D, d/M/Y");
	echo "<b> e são </b> ";
	echo date("H:i:s");
	echo "<hr>";
	
	echo "Rio de Janeiro, ";
	echo date("d");
	echo " de ";
	echo date("M");
	echo " de ";
	echo date("Y");
	echo ".<hr>";
	
	echo "Rio de Janeiro, " . date("d") . " de " . date("M") . " de " . date("Y") . ". <hr>";
	
	echo "10 dias depois ==> ";
	echo date("d/m/Y", strtotime("10 days"));
	echo "<br>";
	echo "10 dias antes ==> ";
	echo date("d/m/Y", strtotime("-10 days"));
	echo "<hr>";
	
	echo "10 meses depois ==> ";
	echo date("d/m/Y", strtotime("10 months"));
	echo "<br>";
	echo "10 meses antes ==> ";
	echo date("d/m/Y", strtotime("-10 months"));
	echo "<hr>";
	
	echo "10 anos depois ==> ";
	echo date("d/m/Y", strtotime("10 years"));
	echo "<br>";
	echo "10 anos antes ==> ";
	echo date("d/m/Y", strtotime("-10 years"));
	echo "<hr>";
	
	echo "10 semanas depois ==> ";
	echo date("d/m/Y", strtotime("10 weeks"));
	echo "<br>";
	echo "10 semanas antes ==> ";
	echo date("d/m/Y", strtotime("-10 weeks"));
	echo "<hr>";
	
	date_default_timezone_set('America/Sao_Paulo');
	echo date("h:ia") . " - " . date_default_timezone_get() . "<br>";
	date_default_timezone_set('America/Cancun');
	echo date("h:ia") . " - " . date_default_timezone_get() . "<br>";
	date_default_timezone_set('America/Chicago');
	echo date("h:ia") . " - " . date_default_timezone_get() . "<br>";
	
?>
</body>
</html>