<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php

    echo "<h1 style='color:red;text-align:center'> Minha Primeira Página PHP </h1>";
	print "<hr>";
	echo "Isto é muito fácil <br>";
	echo "PHP é uma linguagem de fácil aprendizado, e muito irreverente.";
	echo "<hr>";
	/* 
	    comentários
		utilizado para comentarios com várias linhas
		 
	*/
	
	//Trabalhando com variáveis
	
	//entrada dos dados
	$a = 10;
	$b = 5;
	
	//processamento
	$soma = $a + $b;
	$sub = $a - $b;
	$mult = $a * $b;
	$div = $a / $b;	

	//saida
	echo "A soma é $soma <hr>";
	echo "$a + $b = $soma <br>";
	echo "$a - $b = $sub <br>";
	echo "$a * $b = $mult <br>";
	echo "$a / $b = $div <hr>";
	
	//o uso das aspas simples não reconhece o valor das variáveis.
	//as aspas simples imprime nas tela o seu conteúdo na integra, reconhedo apenas html e css.
	echo 'A soma é $soma <hr>';
	print 'A soma é $soma <hr>';


	
?>
</body>
</html>