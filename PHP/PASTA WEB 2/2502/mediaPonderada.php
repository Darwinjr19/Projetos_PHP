<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Media Ponderada </title>
</head>
<body>
	<form action="mediaPonderada.php" method="POST">
		<enter>
		
			<tr>
			<td><label>Nota do Trabalho</label></td><br>
			<td><input type="text" name="txt1"></td><br>

			<td><label>Nota da Prova</label><br>
			<td><input type="text" name="txt2"></td><br>
			</tr>
			<tr>
			
				
				<td >
					<input type="submit" name="btnCalcular" value="Enviar">
				</td>
			</tr>
		</table>		
	</form>

	<?php
		$trabalho=$_POST['txt1'];
		$prova=$_POST['txt2'];
	    
	    $media=($trabalho*4 + $prova *6)/10;

	    if ($media>10) {
	    	echo "Nota inválida";
	    }
	    else{
	    	echo "Sua nota é: $media";

	    }


		  

	?>


</body>
</html>