<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Número Decrescente </title>

</head>
<body>
	<form action="" method="post">
	<table>
		<tr>
			<td><input type="number" id="num" name="num"></td>
			<td><input type="submit" value="Calcular" name="btncale"></td>
		</tr>
	</table>
	</form>

	<?php

	$num=$_POST['num'];
	for ($i=1; $i<=num ; $i++) 
		{ 
		echo $i."<br>";
		}
	?>

	<br/>
		<a href="index.php"><button>Voltar</button></a>


</body>
</html>