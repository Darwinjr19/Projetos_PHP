<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Meses Trabalhados</title>
</head>
<body>
	<form action="mesesTrabalhados.php" method="post">
			<tr>
				<td><label>Digite Meses Trabalhados</label></td>
				<td><input type="txt" name="txtnum1"></td>
				<td><input type="submit" name="enviar"></td>
			</tr>
		
	</form>

	<?php
	$meses=$_POST['txtnum1'];
	
	

	if ($meses<6) {
		echo " Não tem direito";
	}

	elseif($meses<=11) {
		echo "3 Parcelas ";
	}

	elseif ($meses<=24) {
		echo "4 Parcelas";
	}
	elseif ($meses>24) {
		echo "5 Parcelas";
	}
	

	?>

</body>
</html>