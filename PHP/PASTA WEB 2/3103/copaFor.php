<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Copa do Mundo</title>
</head>
<body>
	<form action="" method="post">
		<select name="ano">
			<option value="">&nbsp;</option>
			<?php
			  for ($i=1930; $i <2018 ; $i+=4) { 
			  	if (($i!=1942)&&($i!=1946)) {
			  		echo "<option value=".$i.">".$i."</option>";
			  	}
			  }
			?>
		</select>

		<input type="submit" value="Enviar" id="btnEnvi" name="btnEnv">
	</form>
	<?php
	$ano=$_POST['ano'];
	switch ($ano) {
		case '1930':
			echo "<h1>Páis sede: Uruguai <br><h1>Campeão: Uruguai</h1> ";
			break;

		case '1934':
			echo "<h1>Páis sede: Itália <br><h1>Campeão: Itália";	
			break;
		case '1938':
			echo "<h1>Páis sede: França <br><h1>Campeão: Itália";	
		break;
		case '1950':
			echo "<h1>Páis sede: Brasil <br><h1>Campeão: Uruguai";
			break;
		case '1954':
			echo "<h1>Páis sede: Suiça <br><h1>Campeão: Alemanha";
			break;
		case '1958':
			echo "<h1>Páis sede: Suécia <br><h1>Campeão: Brasil";
			break;
		case '1962':
			echo "<h1>Páis sede: Chile <br><h1>Campeão: Brasil";
			break;
		case '1966':
			echo "<h1>Páis sede: Inglaterra <br><h1>Campeão: Inglaterra";
			break;
		case '1970':
			echo "<h1>Páis sede: México <br><h1>Campeão: Brasil";
			break;
		case '1974':
			echo "<h1>Páis sede: Alemanha Ocidental<br><h1>Campeão:Alemanha";
			break;
		case '1978':
			echo "<h1>Páis sede: Argentina <br><h1>Campeão: Argentina";
			break;
		case '1982':
			echo "<h1>Páis sede: Espanha <br><h1>Campeão: Itália";
			break;
		case '1986':
			echo "<h1>Páis sede: México <br><h1>Campeão: Argentina";
			break;
		case '1990':
			echo "<h1>Páis sede: Itália <br><h1>Campeão: Alemanha";
			break;
		case '1994':
			echo "<h1>Páis sede: EUA <br><h1>Campeão: Brasil";
			break;
		case '1998':
			echo "<h1>Páis sede: França <br><h1>Campeão: França";
			break;
		case '2002':
			echo "<h1>Páis sede:Coreia do Sul e Japão <br><h1>Campeão:Brasil";
			break;

		case '2006':
			echo "<h1>Páis sede: Alemanha <br><h1>Campeão: Itália";
			break;
		case '2010':
			echo "<h1>Páis sede:África do Sul <br><h1>Campeão:Espanha";
			break;
		case '2014':
			echo "<h1>Páis sede: Brasil <br><h1>Campeão: Alemanha";
			break;
		case '2018':
			echo "<h1>Páis sede: Rússia <br><h1>Campeão: França";
			break;
		
		default:
		echo "Essa opção e inválida";			
			break;
		}
	?>
	<br/>
	<br/>
		<a href="index.php"><button>Voltar</button></a>
	<br/>

</body>
</html>