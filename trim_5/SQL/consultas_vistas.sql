/*La empresa almacena la
información de sus empleados en dos tablas
llamadas "empleados" y "secciones"*/

/*se crea la base de datos VISTAS*/
create database vistas;

/*se Abre la base de datos*/
use vistas;

/*se crea tabla SECCIONES con la PK*/
create table secciones(
 codigo int auto_increment primary key,
 nombre varchar(30),
 sueldo decimal(5,2) );
 
 /*Se Verifica la estructura de la tabla*/
 describe secciones;
 
 /*se crea tabla EMPLEADOS con la PK*/
 create table empleados(
codigoe int primary key auto_increment,
documento char(8),
sexo char(1),
apellido varchar(40),
nombre varchar(30),
domicilio varchar(30),
seccion int not null,
cantidadhijos int,
estadocivil char(10),
fechaingreso date );

 /*Se Verifica la estructura de la tabla EMPLEADOS*/
describe empleados;

/*se inserta LOS REGISTROS secciones*/
insert into secciones(nombre,sueldo) 
values
('Administracion', 300),
('Contaduría', 400),
('Sistemas', 500),
('Recursos Humanos', 200),
('Coordinaciones', 700),
('Jefaturas', 600);

/* se verifica los registros ingresados*/
select * from secciones;

/*se inserta LOS REGISTROS DE LOS EMPLEADOS*/
insert into empleados (documento,sexo,apellido,nombre,domicilio,seccion,cantidadhijos,estadocivil,fechaingreso)
values 
('22222222','f','Lopez','Ana','Colon 123',1,2,'casado','1990-10-10'),
('23333333','m','Lopez','Luis','Madrid 235',1,0,'soltero','1990-02-10'),
('24444444','m','Garcia','Marcos','Santiago 1234',2,3,'divorciado','1998-07-12'),
('25555555','m','Gomez','Pablo','Ecuador 321',3,2,'casado','1998-10-09'),
('26666666','f','Perez','Laura','Peru 1254',3,3,'casado','2000-05-09'),
('7690036','m','Polania','Gerardo','Colombia 1234',3,3,'casado','2002-09-13');

/* se verifica los registros ingresados*/
select * from empleados;

/* Borramos la existencia de ella, en relación al
 nombre que se le colocara */
drop view if exists vista_empleados;

/*Creamos la vista_empleados*/
create view vista_empleados as select concat(apellido,' ',e.nombre) as nombre, sexo, s.nombre as seccion,
cantidadhijos from empleados as e join secciones as s on codigo=seccion;

/*CONSULTAMOS LA LISTA*/
select nombre, seccion, cantidadhijos from vista_empleados;

/* Realizamos otra consulta y la podemos agrupar*/
select seccion, count(*) as cantidad from vista_empleados group by seccion;

/* Borramos la existencia de otra vista segun como la vamos a llamar*/
drop view if exists vista_empleados_ingreso;

/*se crea la vista_empleados_ingreso*/
create view vista_empleados_documento(documento,apellido) as select extract(year from fechaingreso) as fecingreso,
count(*) as cantidad from empleados group by fecingreso;
/* Consultamos la vista creada*/
select documento,apellido from vista_empleados_documento;

/* Consultamos la vista creada*/
select fecingreso,cantidad from vista_empleados_ingreso;
/*se crea la vista_empleados_ingreso*/
create view vista_empleados_ingreso(fecingreso,cantidad) as select extract(year from fechaingreso) as fecingreso,
count(*) as cantidad from empleados group by fecingreso;
/*se borra la base de datos VISTAS*/
drop database vistas;
