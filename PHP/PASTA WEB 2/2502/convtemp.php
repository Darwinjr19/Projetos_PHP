<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversão de Temperaturas</title>
</head>
<body>
	<td><center>
		<form action="convtemp.php" method="post">
			<select name="escolha1">
				<option value=""&nbsp;></option>
				<option value="cel">Celsius</option>
				<option value="fah">Fahrenheit</option>
				<option value="kel">Kelvin</option>
				<option value="ran">Rankine</option>
				<option value="rea">Réaumur</option>
			</select>
	</td>
				
		<!--Segunda opção -->	
		<td>	
			<select name="escolha2">
				<option value=""&nbsp;></option>
				<option value="cel">Celsius</option>
				<option value="fah">Fahrenheit</option>
				<option value="kel">Kelvin</option>
				<option value="ran">Rankine</option>
				<option value="rea">Réaumur</option>
			</select>
		</td>
		

		
			<label><br><br>Digite a temperatura </label><br>
			<input type="text" name="txtTempC"><br>
			<input type="submit" value="Converter" id="btnConvert" name="btnConvert">
		</form>	

		<?php

			$escolha1=$_POST['escolha1'];
			$escolha2=$_POST['escolha2'];
			

			



			if (($escolha1 == 'cel') && ($escolha2=='fah'))
			{
				$tempC = $_POST['txtTempC'];

					$F = $tempC*1.8+32;

					echo"A temperatura em Fahrenheit é: $F";

			} 

			elseif (($escolha1 =='cel')&& ($escolha2=='kel'))
			{

				$tempoC = $_POST['txtTempC'];

					$k= $tempoC+273.15;

					echo"A temperatura em Kelvin é: $k";
			}

				elseif (($escolha1 =='cel') && ($escolha2=='ran'))
			{

				$tempoC = $_POST['txtTempC'];

					$r= $tempoC*1.8+32+459.67;

					echo"A temperatura em rankine é: $r";
			}


				elseif (($escolha1 =='cel') && ($escolha2=='rea'))
			{

				$tempoC = $_POST['txtTempC'];

					$re= $tempoC*0.8;

					echo"A temperatura em Réaumur é: $re";
			}



				elseif (($escolha1 =='kel') && ($escolha2=='cel'))
			{

				$tempoK = $_POST['txtTempC'];

					$c= $tempoK-273.15;

					echo"A temperatura em Celsius: $c";
			}

				elseif (($escolha1 =='kel') && ($escolha2=='fah'))
			{

				$tempoK = $_POST['txtTempC'];

					$f= $tempoK*1.8-459.67;

					echo"A temperatura em Fahrenheit: $f";
			}

				elseif (($escolha1 =='kel') && ($escolha2=='ran'))
			{

				$tempoK = $_POST['txtTempC'];

					$r= $tempoK*1.8;

					echo"A temperatura em Rankine: $r";
			}

				elseif (($escolha1 =='kel') && ($escolha2=='rea'))
			{

				$tempoK = $_POST['txtTempC'];

					$re= ($tempoK-273.15)*0.8;

					echo"A temperatura em Réaumur: $re";
			}

				elseif (($escolha1 =='fah') && ($escolha2=='cel'))
			{

				$tempof = $_POST['txtTempC'];

					$c= ($tempof-32)/1.8;

					echo"A temperatura em Celsius: $c";
			}

				elseif (($escolha1 =='fah') && ($escolha2=='kel'))
			{

				$tempof = $_POST['txtTempC'];

					$k= ($tempof+459.67)/1.8;

					echo"A temperatura em Kelvin: $k";
			}

				elseif (($escolha1 =='fah') && ($escolha2=='ran'))
			{

				$tempof = $_POST['txtTempC'];

					$r= $tempof+459.67;

					echo"A temperatura em rankine: $r";
			}

				elseif (($escolha1 =='fah') && ($escolha2=='rea'))
			{

				$tempor = $_POST['txtTempC'];

					$re = ($tempof-32)/2.25;

					echo"A temperatura em Réaumur: $re";
			}

		?>
		</center>

</body>
</html>