<!DOCTYPE html>
<html>
<head>
	<title>Tabela</title>
</head>
<body>

		<table border="1">

			<?php
				$c=1;
				while ($c<= 10) {
				 echo "<tr><td>".$c."</tr></td>";
				  $c+=1;
				}
			?>

		 </table>

		 <br/>
		 <br/>
		 <a href="index.php"><button>Voltar</button></a>
		 <br/>

</body>
</html>