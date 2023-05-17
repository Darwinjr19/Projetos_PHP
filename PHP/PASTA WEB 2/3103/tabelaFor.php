<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Tabela</title>
</head>
<body>

	<table border="1">
		<?php
			for ($i=1; $i<=10;$i+=1) { 
				echo "<tr><td>".$i."</tr></td>";	
			}
		?>
	</table>

	<br/>
	<br/>
		<a href="index.php"><button>Voltar</button></a>
	<br/>

</body>
</html>