<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soma de dois numeros</title>
</head>
<body>

	<form action="exer2.php" method="post">
		<label>Digite o primeiro Número</label><br>
		<input type="text" name="num1"><br><br>

		<label>Digite o Segundo Número</label><br>
		<input type="text" name="num2"><br>

		<input type="submit" value="Calcule" id="btnConvert" name="btnConvert">
		
		<?php

		$num1=$_POST['num1'];
		$num2=$_POST['num2'];

		$res=0;


			

		for ($i=$num1; $i<=$num2 ; $i++) {

			echo"<br>$i<br>";
			$res+=$i;

			
		}
		echo "<br> A soma é:$res";

		?>






	</form>

</body>
</html>