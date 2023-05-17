<!DOCTYPE html>
<html>
<head>
	<title>Safra</title>
</head>
<body>
	<form action="safra.php" method="post">
		
		
			<tr>
			<td><label>Quantidade da Colheita (KG)</label></td>
			<td><input type="text" name="txt1"></td>
			
			 <input type="submit" name="btnCalcular" value="Enviar">
			
			</tr>
	</form>
	<center>

		<?php
		$colheita=$_POST['txt1'];

		if ($colheita<=1000) {
			echo "Abaixo da renda";
		}
		elseif ($colheita<=5000) {
			echo "Dentro da Meta";			
		}
		elseif ($colheita>=5000) {
			echo "Acima da Meta";
		}

		?>

</body>
</html>