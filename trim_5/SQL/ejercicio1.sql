create database AGENDA;
show databases;
use AGENDA;
create table Agenda1(Nombres varchar(30),direccion varchar(30),
movil int(10), fecha date,identificacion int(11));
 describe Agenda1;
 insert into Agenda1(Nombres,direccion,movil,fecha,identificacion)
 values ("Angel", "cr 34 4-59", 310895,'2023-10-13',102354);
 select * from Agenda1;
 drop database agenda;
 show databases;
 create database Agenda;
 use Agenda;
 create table agenda1(Nombres varchar (30), apellido varchar (30),
 direccion varchar(40), identificacion int(11), fecha date, genero char(1));
 describe agenda1;
 insert into agenda1(Nombres,apellido,direccion,identificacion,fecha,genero)
 values ("Carlos", "medina", "cr 34 -45", 102235, "2023-10-13","M");
 select * from agenda1;
 
 