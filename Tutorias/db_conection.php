<?php  
	include "db_credenciales.php";

	$link = "mysql:host=".db_host.";dbname=".db_database;

	try {
		$pdo = new PDO($link,db_user,db_pass);
	} catch (PDOException $e) {
		print "Error".$e->getMessage()."<br>";
		die();
	}

	function registrarCarrera($nombre){
		global $pdo;

		$sql = "INSERT INTO carrera (nombre) VALUES (?)";
		$insert = $pdo -> prepare($sql);
		$insert -> execute(array($nombre));
	}

	function registrarAlumno($matricula,$nombre,$carrera,$tutor){
		global $pdo;

		$sql = "INSERT INTO alumno (matricula,nombre,carrera,tutor) VALUES (?,?,?,?)";
		$insert = $pdo -> prepare($sql);
		$insert -> execute(array($matricula,$nombre,$carrera,$tutor));
	}

	function registrarTutor($id,$nombre,$carrera){
		global $pdo;

		$sql = "INSERT INTO tutor (id,nombre,carrera) VALUES (?,?,?)";
		$insert = $pdo -> prepare($sql);
		$insert -> execute(array($id,$nombre,$carrera));	
	}

	function consultarCarrera(){
		global $pdo;

		$sql = "SELECT * FROM carrera";
		$insert = $pdo -> prepare($sql);
		$insert -> execute();

		$r = $insert->fetchAll();

		if($r){
			return 1;
		}else{
			return 2;
		}
	}

	function consultarTutor(){
		global $pdo;

		$sql = "SELECT * FROM tutor";
		$insert = $pdo -> prepare($sql);
		$insert -> execute();

		$r = $insert->fetchAll();

		if($r){
			return 1;
		}else{
			return 2;
		}
	}

	function carreras(){
		global $pdo;
		
		$sql = "SELECT * FROM carrera";
		$insert = $pdo -> prepare($sql);
		$insert -> execute();

		$r = $insert->fetchAll();

		if($r){
			return $r;
		}else{
			return [];
		}	
	}

	function tutores(){
		global $pdo;
		
		$sql = "SELECT * FROM tutor";
		$insert = $pdo -> prepare($sql);
		$insert -> execute();

		$r = $insert->fetchAll();

		if($r){
			return $r;
		}else{
			return [];
		}	
	}
?>