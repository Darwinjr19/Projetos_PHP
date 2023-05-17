<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maior Número</title>
</head>
<body>

	<form action="maiornum.php" method="post">
		<label>Digite o primeiro numero </label><br>
		<input type="text" name="txtnum1"><br>
		<label><br>Digite o segundo numero </label><br>
		<input type="text" name="txtnum2"><br>
		<label><br>Digite o terceiro numero </label><br>
		<input type="text" name="txtnum3"><br>
		<input type="submit" value="Calcule" id="btnConvert" name="btnConvert">
	</form>	
	<a href="web.html">Pagina Inicial</a>

	<?php
		$num1=$_POST['txtnum1'];
		$num2=$_POST['txtnum2'];
		$num3=$_POST['txtnum3'];


		if ($num1 > $num2 && $num1 > $num3)
		{
			echo "O maior número é:$num1";
		}

		else if ($num2 > $num3 && $num2 > $num1)
		{

			echo "O maior número é:$num2";
		}
		else if ($num3> $num2 && $num3> $num1)
		{
			echo "O maior número é: $num3";
		}


	?>



</body>
</html>