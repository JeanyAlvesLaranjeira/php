<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	
	echo "<h2 style='text-align:center'> Funções para Strings(Textos) </h2>";
	echo "<hr>";
	
	$nome = "Seu Nome Completo";
	
	echo "<b> Normal: </b>";
	echo $nome;
	echo "<br>";
	
	echo "<b> Maiúsculo: </b>";
	echo strtoupper($nome);
	echo "<br>";
	
	echo "<b> Minúsculo: </b>";
	echo strtolower($nome);
	echo "<br>";
	
	echo "<b> Invertido: </b>";
	echo strrev($nome);
	echo "<br>";
	
	echo "<b> Quantidade de Dígitos: </b>";
	echo strlen($nome);
	echo "<br>";
	
	echo "<b> Partes do Texto: </b>";
	echo substr($nome,9,8);
	echo "<br>";
	
	echo "<b> Troca de Caracteres: </b>";
	echo strtr($nome,"o","_");
	echo "<br>";
	
	echo "<b> Separando Textos: </b>";
	$partes = explode(" ",$nome);
	$tot = count($partes)-1;
	echo "$partes[0] $partes[$tot]";	 
	echo "<br>";
	
	echo "<b> Remover espaços a Esquerda e Direita: </b>";
	echo trim($nome);
	echo "<br>";
	
	echo "<b> Remover espaços a Esqueda: </b>";
	echo ltrim($nome);
	echo "<br>";
	
	echo "<b> Remover espaços a Direita: </b>";
	echo rtrim($nome);
	echo "<br>";
?>
</body>
</html>