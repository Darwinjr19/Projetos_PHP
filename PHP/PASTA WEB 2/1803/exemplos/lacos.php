<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laços de Repetição</title>
</head>
<body>

		<?php

		$i=1;
		$acum=0;
		$cont=0;
		echo"Laços de Repetição - While<br>";
		while ($i<=10) {
			echo"$i<br>";
			$acum= $acum+$i; // $acum+=$i;
			$i++;
		}
		echo"Fim do laço de Repetição - while<br>";
		echo"Somatória do laço: $acum<br>";



		echo"<br>Laços de Repetição - For<br>";
		for ($i=1; $i<=50 ; $i++) { 
			echo"$i<br>";
			$acum+=$i;
		}
		$res= $acum/50;
		echo"Fim do laço de Repetição - For<br>";
		echo"Somatória do laço: $acum<br>";
		echo"A média do laço: $res<br>";

		echo"<br>Laços de Repetição - Do While<br>";

		
		$valor=1;
		do  {

			echo"$valor<br>";
			if ($valor>=18) {
				$cont++;
			}
			$acum==$valor;
			$valor++;			
			

			} while ($valor<=20);
			$res= $acum/20;
			echo"Fim do laço de Repetição - Do While<br>";
			echo"Somatória do laço: $acum<br>";
			echo"A média do laço: $res<br>";
			echo"A quantidade de maiores de 18: $cont<br>";

		?>




</body>
</html>