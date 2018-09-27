<?php 
	include "db_conection.php";

	if(isset($_POST['carrera'])){
		$carrera = $_POST['carrera'];

		registrarCarrera($carrera);
		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrar carrera</title>
</head>
<body>
<center>
	<h2>Registrar carrera</h2>
	<br><br>
	<form method="post" action="registrarCarrera.php">
		<label for="carrera">Nombre:</label>
		<input type="text" name="carrera" placeholder="Carrera" required>
		<br><br>
		<input type="submit" name="guardar" value="Guardar">
	</form>
</center>
</body>
</html>