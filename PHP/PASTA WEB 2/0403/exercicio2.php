<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercio 2</title>
</head>
<body>
	<form action="exercicio2.php" method="post">
		<center>
		
				<td><label>Digite Sua Altura</label></td>
				<td><input type="text" name="txtAltura"></td>

				<td><label>Selecione Seu Genero</label></td>
					<td>
				<select name="Genero">
			     	<option value="Mas">Masculino</option>
					<option value="Fem">Feminino</option>

				</select></td>

				<td><input type="submit" name="btnCalcular" value="Enviar">
				</td>
			
		
		</center>
	</form>

	<?php
		$Genero=$_POST['Genero'];
		$Altura=$_POST['txtAltura'];


		if ($Genero =='Mas') {

		 	$peso=(72.7*$Altura)-58;
		 } 
		 elseif ($Genero =='Fem') {
		 	$peso=(62.1*$Altura)-44.7;
		 }
		 echo "O peso ideal é: $peso";

	?>

</body>
</html>