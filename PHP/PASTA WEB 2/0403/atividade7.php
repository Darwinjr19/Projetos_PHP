<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 7</title>
</head>
<body>
	<form action="atividade7.php" method="post">
		<center>		
			<tr>
				<td><label><br>Distância total (em km) </label></td><br>
				<td><input type="text" name="txtKm"></td><br>
				<td><label><br>Quantidade de combustível (em litros) </label></td><br>
				<td><input type="text" name="txtCm"></td><br>			
				<td>
					<input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>
		</center>
	</form>

<center>	
	<?php

	$km=$_POST['txtKm'];
	$lt=$_POST['txtCm'];

		$formula= $km/$lt;

		echo "<br>Seu consumo medio foi dé: $formula";
	?>
</center>
	

</body>
</html>