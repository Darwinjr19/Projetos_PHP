<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="media.php" method="post">
		<label>Digite a primeira nota</label><br>
		<input type="text" name="txtnota1"><br>

		<label><br>Digite a segunda nota</label><br>
		<input type="text" name="txtnota2"><br>

		<label><br>Digite a terceira nota</label><br>
		<input type="text" name="txtnota3"><br>

		<input type="submit"value="Calcule" id="btnConvert" name="btnConvert">
	</form>


	<?php 

	$nota1=$_POST['txtnota1'];
	$nota2=$_POST['txtnota2'];
	$nota3=$_POST['txtnota3'];

	$media= ($nota1+ $nota2+ $nota3)/3;

	echo"media: $media<br>";

		if ($media<5) {

			echo "Reprovado estude mais RAPARIGA!!!!!";
		}

			elseif ($media>=5) {

				echo "Aprovado, Parabens seu CORNO!!!!!!";
				
			}



	 ?>

</body>
</html>