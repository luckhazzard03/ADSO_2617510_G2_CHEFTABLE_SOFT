create database colegios;
use colegios;
 /*se crea la tabla Alumnos*/
Create table Alumnos(
Id char(8) primary key,
 Nombre varchar(20) not null, 
 Apellido varchar(20) not null,
 Direccion varchar(50),
 Fecha_nacimiento char(8));
 /*se crea la tabla Asignatura*/
 Create table Asignatura(
 Id char(8) primary key,
 Nombre varchar(20) not null);
  /*se crea la tabla Profesor*/
Create table Profesor(
Id char(8) primary key,
 Nombre varchar(20) not null,
 Apellido varchar(20) not null,
 Direccion varchar(50),
 Fecha_nacimiento char(8),
 Nivel_Academico varchar (20));
  /*se crea la tabla Inscripcion*/
Create table Inscripcion(
Id char(8) primary key,
 IdAsignatura char(8) not null, 
 IdAlumno char(8) not null,
 IdProfesor char(8) not null,
 Fecha char(8),
 CONSTRAINT fk_Asignatura FOREIGN KEY (IdAsignatura) REFERENCES Asignatura (Id),
 CONSTRAINT fk_Alumno FOREIGN KEY (IdAlumno) REFERENCES Alumnos (Id),
 CONSTRAINT fk_Profesor FOREIGN KEY (IdProfesor) REFERENCES Profesor (Id));
show tables;

describe Alumnos;
describe Asignatura;
describe Profesor;
/*se crea la tabla Areas_Clases*/
create table Areas_Clases(
Id_Area char(8),
 Nombre_Area varchar(20),
 Profesor varchar(40) not null,
 Asignatura varchar(20) not null,
 Cod_Aula int,
 Fecha_Inic date,
 Descripcion text(50));
 Show tables;
alter table Areas_Clases add primary key (Id_Area);
alter table Areas_Clases drop primary key;
alter table areas_Clases add foreign key (Asignatura) references Alumnos(id);
describe areas_clases;
/*Borrar las FK DE LAS TABLAS*/
ALTER TABLE `colegios`.`areas_clases` DROP FOREIGN KEY `areas_clases_ibfk_1`;
ALTER TABLE `colegios`.`areas_clases` DROP INDEX `asignatura`;# alter table areas_clases add constraint fk_alumnos_area_clases foreign key(area_clases_asignatura) references alumnos(alumnos_id);