<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ATIVIDADE 4</title>
</head>
<body>
	
	<form action="maiornum2" method="post">
		<label>Digite o primeiro numero </label><br>
		<input type="text" name="num1"><br>
		<label><br>Digite o segundo numero </label><br>
		<input type="text" name="num2"><br>

		<input type="submit" value="Calcular" id="btnCalc" name="btnCalc">
	</form>

	<?php
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];

	$soma = $num1+$num2;
	

	if ( $soma >20 ) 
		{
			$va=$soma+8;
			echo "$va";
		} 
	elseif ($soma<-5) 
	{
		$va=$soma-5;
	}
	?>

</body>
</html>