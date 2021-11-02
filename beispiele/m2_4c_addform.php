<!--
- Praktikum DBWT. Autoren:
- Paundra, Daran, 3290902
- Alejandro, Schmeing, 3203949
-->

<?php 
	include "./m2_4a_standardparameter.php"
?>
 
<!DOCTYPE html>
<html lang="de">
	<head>
		<title>4c</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="./m2_4c_addform.php" method="POST">
			<input type="number" name="num1" id="num1" value="0">
			<label for="num1">Zahl 1</label><br>
			<input type="number" name="num2" id="num2" value="0">
			<label for="num2">Zahl 2</label><br>
			<input type="submit" value="addieren">
			<input type="submit" value="multiplizieren"><br>
			
			
		</form>
		<?php
				echo $_POST["num1"]+$_POST["num2"];
			?>
	</body>
	<footer>

	</footer>
</html>