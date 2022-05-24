<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php

	echo "Sorteio ==> ";
	echo rand(0,100);
	echo "<hr>";
	
	$a = rand(0,100);
	$b = rand(0,100);
	$c = rand(0,100);
	$d = rand(0,100);
	
	echo "$a - $b - $c - $d";
	
	echo "<br><br>";
	
	echo "Menor ==> ";
	echo min($a,$b,$c,$d);
	
	echo "<br>";	
	echo "Maior ==> ";
	echo max($a,$b,$c,$d);
	
	echo "<hr>";
	
	
	echo "R$ $a";
	echo "<br>";
	echo "R$ " . number_format($a,2,",",".");
	//number_format(variavel,nºcasas decimais,separador de casas decimais, separador de milhares).
	echo "<br>";
	echo "R$ " . number_format($b,2,",",".");
	echo "<br>";
	echo "R$ " . number_format($c,2,",",".");
	echo "<br>";
	echo "R$ " . number_format($d,2,",",".");
	

?>
</body>
</html>