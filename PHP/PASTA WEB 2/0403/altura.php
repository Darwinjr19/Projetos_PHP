<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Altura</title>
</head>
<body>
	<form action=altura.php method="post">
		<center>
		
			<tr>
			<td><label>Digite Sua Altura</label></td>
			<td><input type="text" name="txtalt"></td>
			</tr>
			<tr>		
				<td><input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>
		</center>
	</form>
	<center>
		<?php
	$altura=$_POST['txtalt'];

	$total= (72.7*$altura)-58;
	echo "Seu peso ideal é: $total";

	?>
		
	</center>

	

</body>
</html>