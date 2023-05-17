<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Evasão Escolar</title>
</head>
<body>
	
	<form action="evasaoEscolar.php" method="POST">
		<center>		
			<tr>
			<td><label>Quantidade de Alunos Matriculados</label></td><br>
			<td><input type="text" name="txt1"></td><br>
			<td><label><br>Quantidade de Alunos Formados</label></td><br><br>
				<td><input type="text" name="txt2"></td><br>
			</tr>
			<tr>
					<input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>
		</center>
	</form>
	<center>
		<?php
		$ma=$_POST['txt1'];
		$for=$_POST['txt2'];

		$res=(($ma-$for)/$ma)*100;

		if ($res <10) {
			echo "<br>Baixa evasão";
		}
		elseif ($res < 15) {
			echo "<br>Evasão Media";
		}
		elseif ($res < 25) {
			echo "<br>Evasão Alta";
		}
		else{
			echo "<br>Evasão muita Alta";
		}

		?>

		
	</center>
		
</body>
</html>