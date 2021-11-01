<!--
- Praktikum DBWT. Autoren:
- Paundra, Daran, 3290902
- Alejandro, Schmeing, 3203949
-->
 
<!DOCTYPE html>
<html lang="de">
	<head>
		<title>4c</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="" method="POST">
			<input type="number" name="num1" id="num1" value="0">
			<label for="num1">Zahl 1</label><br>
			<input type="number" name="num2" id="num2" value="0">
			<label for="num2">Zahl 2</label><br>
			<input type="submit" value="addieren">
			<input type="submit" value="multiplizieren"><br>
			<?php
			$summe="";
			if(isset($_POST['addieren'])) {
				$num1=$_POST['num1'];
				$num2=$_POST['num2'];
				$summe=$num1+$num2;
			}
			// if(isset($_POST['addieren'])) {
			// 	$num1=$_POST['num1'];
			// 	$num2=$_POST['num2'];
			// 	$summe=$num1+$num2;
			// }
			?>
			<p>Ergebnis: <?php echo $summe;?></p>
		</form>
	</body>
	<footer>

	</footer>
</html>