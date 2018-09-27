<?php 
	include "db_conection.php";

	$Ncarreras = consultarCarrera();

	if($Ncarreras == 2){
		header("location:index.php");
	}else{
		if($_POST){
			if(isset($_POST['id'])&&isset($_POST['nombre'])&&isset($_POST['carrera'])){
				registrarTutor($_POST['id'],$_POST['nombre'],$_POST['carrera']);
				header("location:index.php");
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrar Tutor</title>
</head>
<body>
<center>
	<h2>Registrar tutor</h2><br><br>
	<form method="post" action="registrarTutor.php">
		<label for="id">ID:</label>
		<input type="text" name="id" placeholder="numero de trabajador" required><br><br>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" placeholder="Nombre" required><br><br>
		<label for="carrera">Carrera:</label>
		<select name="carrera">
			<?php 
				$resultadosCarrera = carreras();
				foreach ($resultadosCarrera as $datos){
				?>
				<option value="<php echo $datos['nombre'] ?>"> <?php echo $datos['nombre'] ?></option>	
			<?php  } ?>
		</select><br><br>

		<input type="submit" name="guardar" value="Guardar">
	</form>
</center>
</body>
</html>