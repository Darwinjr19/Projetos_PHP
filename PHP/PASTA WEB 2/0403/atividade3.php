<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 3</title>
</head>
<body>
	<body>
	<form action="atividade3.php" method="post">
		<center>
		
			<tr>
				<td><label><br>Digite Numero 1<br></label></td>
				<td><input type="text" name="txtn1"></td>
				<td><label><br>Digite Numero 2<br></label></td>
				<td><input type="text" name="txtn2"></td>
				<td><label><br><br>Selecione Seu Genero<br></label></td>
			</tr>
			<tr>

				<td><select name="opcao">
					<option value="Soma">Adição</option>
					<option value="Sub">Subtração</option>
					<option value="Mul">Multiplicação</option>
					<option value="Div">Divisão</option>
				</select>
			</td>
				<td><input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>
		
		</center>
	</form>

<center>
	<?php
		$n1=$_POST['txtn1'];
		$n2=$_POST['txtn2'];
		$opc=$_POST['opcao'];

		if ($opc == 'Soma') {
			$resultado= $n1+$n2;
		}
		elseif ($opc == 'Sub') {
			$resultado= $n1-$n2;
		}
		elseif ($opc== 'Mul') {
			$resultado= $n1*$n2;
		}
		elseif ($opc == 'Div') {
			$resultado= $n1/$n2;
		}
		echo "<br>Seu resultado é: $resultado";

	?>
	
</center>
	


</body>
</html>