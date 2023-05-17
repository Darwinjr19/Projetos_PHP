<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>for e while</title>
</head>
<body>

	<form action="forewhile.php" method="post">
		<label>Digite um Número</label><br>
		<input type="text" name="num1"><br><br>

		<label>Digite o segundo Número</label><br>
		<input type="text" name="num2"><br>

		<input type="submit" value="Calcule" id="btnConvert" name="btnConvert">
<br><br>
     </form>

	
	<?php

	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$i=0;
	$res=0;

		for ($i=$num1; $i<=$num2 ; $i++) {

			echo "$i<br>";
		}
		

		?>




</body>
</html>