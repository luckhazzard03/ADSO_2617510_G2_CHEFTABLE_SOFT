/*se crea la base de datos*/
create database Biblioteca;
/*se Abre la base de datos*/
use Biblioteca;
/*se crea tabla LIBROS con la PK*/
create table Libros(
Codigo int not null auto_increment,
Titulo varchar(40) not null,
Autor varchar(30),
Editorial varchar(15),
Precio decimal(5,2) unsigned,
Cantidad smallint unsigned, 
primary key(codigo));
/*Se Verifica la estructura de la tabla*/
describe Libros;
/*se inserta LIBROS*/
insert into Libros(Titulo,Autor,Editorial,Precio,Cantidad) 
values 
 ('El Adefecio','J Borges','Planeta',15,100),
 ('Martin Fierro','Jose Hernandez','Emece',22.20,200),
 ('Antologia poetica','Borges','Planeta',40,150),
 ('Aprenda PHP','Mario Molina','Emece',18.20,200),
 ('Cervantes y el quijote','J Borges','paidos',36.40,100),
 ('Manual PHP','J.C Paez','Paidos',30.80,100),
 ('Harry Potter y la piedra filosofal','J.K Rowling','Paidos',45.00,500),
 ('Harry Potter y la camara secreta','J.K Rowling','Paidos',46.00,300),
 ('Alicia en el pais de las maravillas','J.K Rowling','Paidos',null,50),
 ('Cien años de soledad','G. Marquez','Norma',20.50,100);
 /* se verifica los registros ingresados*/
select*from Libros;
 /*Se genera el primer calculo*/
 select Titulo,Precio,Cantidad,Precio*Cantidad from Libros;
 /*Se genera el segundo calculo*/
 select Titulo,Precio,Cantidad,Precio*Cantidad,(Precio*Cantidad*0.19)from Libros;
/*Se genera el Tercer calculo*/
select Titulo,Precio,Precio*0.1,Precio-(Precio*0.1) from Libros;
 
 




