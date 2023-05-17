<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ativiade 4</title>
</head>
<body>
	<form action="Atividade4.php" method="post">
	<center>	
			<tr>
			<td><label>Digite Um Número de 1 a 12</label></td>
			<td><input type="text" name="txtMes"></td>
				
				<td><input type="submit" name="btnCalcular" value="Enviar">
			</tr>
		</center>
	</form>
<center>
	<?php
	$num=$_POST['txtMes'];
		
    switch($num)
    {
    case 1:
        echo "<br>Mês de Janeiro";
    case 2:
        echo "<br>Mês de Fevereiro";
        break;
    case 3:
        echo "<br>Mês de Março";
        break;
    case 4:
        echo "<br>Mês de Abril";
        break;
    case 5:
       echo "<br>Mês de Maio";
        break;
    case 6:
        echo "<br>Mês de Junho";
        break;
    case 7:
    echo "<br>Mês de Julio";   
        break;
    case 8:
        echo "<br>Mês de Agosto";
        break;
    case 9:
       echo "<br>Mês de Setembro";
        break;
    case 10:
        echo "<br>Mês de Outubro";
        break;
    case 11:
        echo "<br>Mês de Novembro";
        break;
    case 12:
      echo "<br>Mês de Dezembro";
        break;
    default:
        echo "<br>Mês Inválido!";
    }

		
	?>
	
</center>

	

</body>
</html>