/*
	alumnos
	matricula
	carrera
	nombre
	tutor

	tutores
	no. empleado
	nombre
	carrera

	carrera
	id
	nombre
*/

create database `examen_tutorias`;

CREATE TABLE `examen_tutorias`.`alumno` ( 
	`matricula` INT NOT NULL , 
	`nombre` VARCHAR(300) NOT NULL , 
	`carrera` VARCHAR(300) NOT NULL , 
	`tutor` VARCHAR(300) NOT NULL , 
	PRIMARY KEY (`matricula`));

CREATE TABLE `examen_tutorias`.`tutor` ( 
	`id` INT NOT NULL , 
	`nombre` VARCHAR(300) NOT NULL , 
	`carrera` VARCHAR(300) NOT NULL , 
	PRIMARY KEY (`id`));

CREATE TABLE `examen_tutorias`.`carrera` ( 
	`id` INT NOT NULL AUTO_INCREMENT ,  
	`nombre` VARCHAR(300) NOT NULL ,    
	PRIMARY KEY  (`id`));
