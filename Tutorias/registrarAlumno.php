<?php 
	include "db_conection.php";

	$Ncarreras = consultarCarrera();
	$Ntutores = consultarTutor();

	if($Ncarreras == 2 || $Ntutores == 2){
		header("location:index.php");
	}else{
		if($_POST){
			if(isset($_POST['matricula'])&&isset($_POST['nombre'])&&isset($_POST['carrera'])&&isset($_POST['tutor'])){
				registrarAlumno($_POST['matricula'],$_POST['nombre'],$_POST['carrera'],$_POST['tutor']);
				header("location:index.php");
			}
		}
	}

	$resultadosCarrera = carreras();
	$resultadosTutor = tutores();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar alumno</title>
</head>
<body>
<center>
	<h2>Registrar alumno</h2>

	<br><br>
	<form method="post" action="registrarAlumno.php">
		<label for="matricula">Matricula:</label>
		<input type="text" name="matricula" placeholder="Matricula" required><br><br>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" placeholder="Nombre" required><br><br>
		<label for="carrera">Carrera:</label>
		<select name="carrera">
			<?php foreach ($resultadosCarrera as $datos){ ?>
					<option value="<php echo $datos['nombre'] ?>"> <?php echo $datos['nombre'] ?></option>	
				<?php  } ?>
		</select><br><br>
		<label for="tutor">Carrera:</label>
		<select name="tutor">
			<?php foreach ($resultadosTutor as $datos){ ?>
					<option value="<php echo $datos['nombre'] ?>"> <?php echo $datos['nombre'] ?></option>	
				<?php  } ?>
		</select><br><br>

		<input type="submit" name="guardar" value="Guardar">
	</form>
</center>
</body>
</html>
