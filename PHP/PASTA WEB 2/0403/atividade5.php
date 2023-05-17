<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 5</title>
</head>
<body>
	<form action="Atividade5.php" method="post">
		<center>
			<tr>
				<td><label><br>Digite O Seu Nome</label></td><br>
				<td><input type="text" name="txtNome"></td><br>
				<td><label><br>Digite O Nome do Livro</label></td><br>
				<td><input type="text" name="txtLivro"></td><br>
				<td><label><br>Selecione Seu Genero</label></td><br>
									
				
				<select name="opcao">
					<option value="prof">Professor</option>
					<option value="alu">Aluno</option>
				</select>
			
				<td>
					<input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>		
		</center>
	</form>

<center>
	<?php
	$nome=$_POST['txtNome'];
	$livro=$_POST['txtLivro'];
	$opc=$_POST['opcao'];

		if ($opc =='alu') {
			$dias= 3;
			
		}
		else{
			$dias=10;
		}
		echo "Livro: $livro<br>";
		echo "Usuario: $nome<br>";
		echo "Deovulação: $dias dias";

	?>
	
</center>
	

</body>
</html>