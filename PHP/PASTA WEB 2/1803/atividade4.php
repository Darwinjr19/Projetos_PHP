<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 4</title>
</head>
<body>

	<form action="atividade4.php" method="post">
		<label>Digite o primeiro Número</label><br>
		<input type="text" name="num1"><br><br>

		<label>Digite o Segundo Número</label><br>
		<input type="text" name="num2"><br>

		<input type="submit" value="Calcule" id="btnConvert" name="btnConvert">

		<?php
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$cont=0;

		if ($num1<= $num2) 
		{
			echo "<br>Resultado: ";
		
		
			for ($i=$num1; $i<=$num2 ; $i++)
			 { 
				if ($i %2 ==0) 
				{
					$cont++;
				}
			}
			echo "$cont";

			for ($i=$num1; $i<=$num2 ; $i++)
			 { 
				if ($i %2==0) 
				{
						echo"<br>São  os pares: $i ";
				}
			}
		
		}		
		else
		{
			echo "Numero inicial maior que Número final";
		}
		?>

</body>
</html>