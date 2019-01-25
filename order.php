<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Podsumowanie zamówienia 🛍</title>
</head>

<body>

<?php 
	 
	$bread = $_POST['bread'];
	$doughnut = $_POST['doughnut'];	
	$suma = 0.99 * $paczkow + 1.29 * $doughnut;
	
echo<<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td>Chleb 🍞 (0.99PLN/szt)</td> <td>$bread</td>
	</tr>
	<tr>
		<td>Pączek 🍩 (1.29PLN/szt)</td> <td>$doughnut</td>
	</tr>
	<tr>
		<td>SUMA ➡</td> <td>$suma PLN</td>
	</tr>	
	</table>
	<br /><a href="index.php">⬅ Strona główna</a>

END;

?>

</body>
</html>