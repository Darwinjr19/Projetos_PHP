<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Numero Aleatorio</title>
</head>
<body>

	<form action="numaleatorio.php" method="post">
	<label>Digite um Número que você deseja</label><br>
	<input type="text" name="num"><br><br>

	<input type="submit" value="Calcule" id="btnConvert" name="btnConvert">

	<?php

	$num = 37;
	$min = 1;
	$max = 50;

	$gera = rand($min,$max);

	if ($gera == $num) 
	{
		echo"Você venceu com o numero: $num";
	}

	else
	{
		echo"Você perdeu, tente novamente";
	
	}

	?>

	</form>

</body>
</html>