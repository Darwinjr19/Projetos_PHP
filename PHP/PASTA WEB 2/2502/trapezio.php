<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trapezio</title>
</head>
<body>
	<form action="Trapezio.php" method="post">
		<table>
			<tr>
				<td><label>Digite Base maior do Trapézio</label></td>
				<td><input type="txt" name="txtnum1"></td>
				<td><label>Digite Base menor do Trapézio</label></td>
				<td><input type="txt" name="txtnum2"></td>
				<td><label>Digite Altura do Trapézio</label></td>
				<td><input type="txt" name="txtnum3"></td>
				<td><input type="submit" name="enviar"></td>
			</tr>
		</table>
	</form>

	<center>
		<?php
		$maior=$_POST['txtnum1'];
		$menor=$_POST['txtnum2'];
		$altura=$_POST['txtnum3'];

		$area=(($maior+$menor)*$altura)/2;
		echo "a Area de um Trapézio é: $area";

		?>
		
	</center>
	
	

</body>
</html>