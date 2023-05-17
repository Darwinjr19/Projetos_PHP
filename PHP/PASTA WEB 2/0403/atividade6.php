<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ativdade 6</title>
</head>
<body>
	<form action="atividade6.php" method="post">
		<center>
		
			<tr>
				<td><label><br>Digite o Comprimento</label></td><br>
				<td><input type="text" name="txtComp"></td><br>
				<td><label><br>Digite a Altura</label></td><br>
				<td><input type="text" name="txtAlt"></td><br>
				<td><label><br>Digite a Largura</label></td><br>
				<td><input type="text" name="txtLarg"></td><br>			
				
				<td>
					<input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>		
		</center>
	</form>

	<?php
	$comp=$_POST['txtComp'];
	$alt=$_POST['txtAlt'];
	$larg=$_POST['txtLarg'];

	$volume= $comp * $larg * $alt;
	echo "O volume da caixa é: $volume";

	?>



</body>
</html>