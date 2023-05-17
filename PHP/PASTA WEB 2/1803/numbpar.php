<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>while olimpiadas</title>
</head>
<body>
	<center>

	<form action="numbpar.php" method="post">
		<select name="exemplo">
			
			<?php
			$anos=1896;
			while ($anos<=2022) {
				echo "<option value=".$anos.">".$anos."</option>";
					$anos+=4;
			}

			?>

		</select>
		<br>
		<input type="submit" value="Enviar">
	</form>

	<?php
		$ex = $_POST['exemplo'];

	switch ($ex) {
		case '1896':
			echo"Sede: Grécia<br>";
			echo "Campeão: EUA";
			break;

		case '1900':
		echo"Sede: França<br>";
		echo "Campeão: França";
		break;

		case '1904':
		echo"Sede: EUA<br>";
		echo "Campeão: EUA";
		break;

		case '1908':
		echo"Sede: Grã Bretanha<br>";
		echo "Campeão: Grã Bretanha";
		break;

		case '1912':
		echo"Sede: Suécia <br>";
		echo "Campeão: EUA";
		break;

		case '1920':
		echo"Sede: Bélgica <br>";
		echo "Campeão: EUA ";
		break;

		case '1924':
		echo"Sede: França<br>";
		echo "Campeão: EUA";
		break;

		case '1928':
		echo"Sede: Ned<br>";
		echo "Campeão: EUA";
		break;

		case '1932':
		echo"Sede: EUA<br>";
		echo "Campeão: EUA";
		break;

		case '1936':
		echo"Sede: Alemanha<br>";
		echo "Campeão: Alemanha";
		break;

		case '1948':
		echo"Sede: Grã Bretanha<br>";
		echo "Campeão: EUA";
		break;

		case '1952':
		echo"Sede: Finlandia<br>";
		echo "Campeão: EUA";
		break;

		case '1956':
		echo"Sede: Austrália<br>";
		echo "Campeão: União Soviética";
		break;

		case '1960':
		echo"Sede: Itália<br>";
		echo "Campeão: União Soviética";
		break;

		case '1964':
		echo"Sede: Japão<br>";
		echo "Campeão: EUA";
		break;

		case '1968':
		echo"Sede: México<br>";
		echo "Campeão: EUA";
		break;

		case '1972':
		echo"Sede: Alemanha Ocidental<br>";
		echo "Campeão: União Soviética";
		break;

		case '1976':
		echo"Sede: Canadá<br>";
		echo "Campeão: União Soviética";
		break;

		case '1980':
		echo"Sede: União Soviética<br>";
		echo "Campeão: União Soviética";
		break;

		case '1984':
		echo"Sede: EUA<br>";
		echo "Campeão: EUA";
		break;

		case '1988':
		echo"Sede: Coreia do Sul<br>";
		echo "Campeão: União Soviética";
		break;

		case '1992':
		echo"Sede: Espanha<br>";
		echo "Campeão: EUN";
		break;

		case '1996':
		echo"Sede: EUA<br>";
		echo "Campeão: EUA";
		break;

		case '2000':
		echo"Sede: Austrália<br>";
		echo "Campeão: EUA";
		break;

		case '2004':
		echo"Sede: Grécia<br>";
		echo "Campeão: EUA";
		break;

		case '2008':
		echo"Sede: China<br>";
		echo "Campeão: China";
		break;

		case '2012':
		echo"Sede: Grã Bretanha<br>";
		echo "Campeão: EUA";
		break;

		case '2016':
		echo"Sede: Brasil<br>";
		echo "Campeão: EUA";
		break;

		case '2020':
		echo"Sede: Japão<br>";
		echo "Campeão: EUA";
		break;

			default:
			echo "Escolha um ano na lista";
			break;

		}



	?>

	</center>

</body>
</html>