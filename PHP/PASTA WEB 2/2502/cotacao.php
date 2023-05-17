<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<body>
	<td><center>
		<form action="cotacao.php" method="post">
			<select name="escolha1">
				<option value=""&nbsp;></option>
				<option value="rea">Real</option>
				
			</select>
	</td>
				
		<!--Segunda opção -->	
		<td>	
			<select name="escolha2">
				<option value=""&nbsp;></option>
				<option value="dol">Dolar</option>
				<option value="eur">Euro</option>
				<option value="lib">Libra</option>
		
			</select>
		</td>

<br><br>

				<label>Digite o Valor:</label>
				<input type="text" name="txtcota"><br><br>
				<input type="submit" value="Converter" id="btnConverter" name="btnConverter">
			</form>

	<?php

		$escolha1=$_POST['escolha1'];
		$escolha2=$_POST['escolha2'];
		


			if(($Escolha1 == 'rea') && ($Escolha2=='dol'))
			{
				$txtcota= $_POST['txtcota'];

				$d= $txtcota*5.40;

				echo"O valor de Dolar é: $d";

			}

			else if(($Escolha1 == 'rea') && ($Escolha2=='eur'))
			{
				$txtcota=$_POST['txtcota'];
				$E= $txtcota*6.50;
				echo"O Valor de Euro é: $E";

			}

				else if(($Escolha1 == 'rea') && ($Escolha2=='lib'))
			{
				$txtcota=$_POST['txtcota'];
				$L= $txtcota*7;
				echo"O Valor de Libras é: $L";				
			}		


	?>
</body>
</html>