create database LORDART;
show databases;
use LORDART;
/*SE CREA UNA TABLA USUARIOS*/
CREATE TABLE USUARIOS(
Id int,
Nombre varchar(30),
Direccion varchar(30),
Celular int(10), 
Fecha date,
Identificacion int(11),
PRIMARY KEY (Id));
describe USUARIOS;
insert into USUARIOS(Nombre,Direccion,Celular,Fecha,Identificacion) values ('Angel','cr 34 4-59',310895009,'2023-10-23',1024966288);
insert into USUARIOS(Nombre,Direccion,Celular,Fecha,Identificacion) values ('Carlos','Dg 84 4-60',311555333,'2023-10-23',1124966289);
insert into USUARIOS(Nombre,Direccion,Celular,Fecha,Identificacion) values ('Luis','cr 80 4-59',310895009,'2023-10-23',1025966290);
insert into USUARIOS(Nombre,Direccion,Celular,Fecha,Identificacion) values ('Andres','cr 100 5-59',310895009,'2023-10-23',1026966289);
 select * from USUARIOS;
 /*SE BORRAN DATOS DE USUARIOS DUPLICADOS*/
delete from USUARIOS where Id='9';
/*se modifica el ID para que sea auto_incrementable*/
alter table USUARIOS modify column Id int auto_increment;
/*SE CREA UNA TABLA PRODUCTO*/
CREATE TABLE PRODUCTO(
Id int not null auto_increment,
Nombre varchar(30) default null,
Tipo varchar(30) default null,
Valor int(10) default null, 
PRIMARY KEY (Id));
describe PRODUCTO;

insert into PRODUCTO(Nombre,Tipo,Valor) values ('Mug','ceramica',16000);
insert into PRODUCTO(Nombre,Tipo,Valor) values ('Caramañola','aluminio',23000);
insert into PRODUCTO(Nombre,Tipo,Valor) values ('caramañola pitillo','aluminio',37000);
insert into PRODUCTO(Nombre,Tipo,Valor) values ('jarra cervecera','vidrio',20000);
insert into PRODUCTO(Nombre,Tipo,Valor) values ('Mug magico','ceramica',25000);
 select * from PRODUCTO;
 /*SE ACTUALIZA EL REGISTO DEL ID "1" Nombre y Valor*/
update PRODUCTO set Nombre='Mug_dorado', Valor='23000' where Id='1';

/*SE CREA UNA TABLA CLIENTE*/
CREATE TABLE CLIENTE(
Id int not null auto_increment,
Nombre varchar(30)not null,
Direccion varchar(30)not null,
Celular int(11)not null, 
Identificacion int(11)not null,
Emaiil varchar(30) not null,
Fecha date not null,
PRIMARY KEY (Id));

describe CLIENTE;
/*SE CREAN LOS REGISTROS DE LA TABLA CLIENTES*/
insert into CLIENTE(Nombre,Direccion,Celular,Identificacion,Emaiil,Fecha)
 values ('TRAXALL','ZONA IND AV68',320219805,23480827,'traxalcol@gmail.com','2023-10-23');
 insert into CLIENTE(Nombre,Direccion,Celular,Identificacion,Emaiil,Fecha)
 values ('TRAXALL','ZONA IN',322145906,23480827,'traxalcol@gmail.com','2023-10-23');
 insert into CLIENTE(Nombre,Direccion,Celular,Identificacion,Emaiil,Fecha)
 values ('TRAXALL','ZONA FRANCA',311270950,23480827,'traxalcol@gmail.com','2023-10-23');
 insert into CLIENTE(Nombre,Direccion,Celular,Identificacion,Emaiil,Fecha) 
 values ('TRAXALL','ZONA IN69',321880950,23480827,'traxalcol@gmail.com','2023-10-23');
select * from CLIENTE;
/*SE ACTUALIZA EL REGISTO DEL ID "1" DIRECCION,CELULAR,FECHA*/
update CLIENTE set Direccion='ZONA IN78', Celular='31589026', Fecha='2023-10-24' where Id='4';
/*SE CAMBIA EL NOMBRE DE LA COLUMNA "Emaiil" */
ALTER TABLE CLIENTE CHANGE Emaiil  Email varchar(30) not null;




