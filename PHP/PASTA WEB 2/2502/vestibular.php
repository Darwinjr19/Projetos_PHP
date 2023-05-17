<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vestibular</title>
</head>
<body>
	<form action="vestibular.php" method="post">
		<center>
			<tr>
			<td><label><br>Valor arrecadado com as inscrições</label></td><br>
			<td><input type="text" name="txt1"></td><br>
			<td><label><br>Quantidade de fiscais</label></td><br>
			<td><input type="text" name="txt2"></td><br>
			<td><label><br>Valor gasto com alimentação</label></td><br>
			<td><input type="text" name="txt3"></td><br>
			</tr>
				
			<tr>
				<td colspan="3"><input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>		
		</center>

		<center>
			<?php
			$arr=$_POST['txt1'];
			$fis=$_POST['txt2'];
			$ali=$_POST['txt3'];

			$total=((($arr - $fis)*70)-$ali);
			
			echo "<br>O valor das despesas é:$total";
		?>

		</center>
		
</body>
</html>