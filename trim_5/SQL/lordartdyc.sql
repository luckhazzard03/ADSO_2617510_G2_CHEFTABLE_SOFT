/*se crea la base de datos*/
create database lordartDYC;

/*se Abre la base de datos*/
use lordartDYC;
/*se crea tabla PRODUCTOS con la PK*/
create table Productos(
Cod int not null auto_increment,
Nombre_prod varchar(50) not null,
Tipo varchar(30),
Cantidad int(10),
Precio decimal(5,2) unsigned,
constraint Pk_Productos primary key(Cod));
/*Se Verifica la estructura de la tabla*/
describe Productos;

drop table Productos;

/*se inserta los PRODUCTOS*/
insert into Productos(Nombre_prod,Tipo,Cantidad,Precio) 
values 
 ('Lata gase','Aluminio',60,15.20),
 ('Caramañola pit','Aluminio',30,23.20),
 ('Caramañola rosc','Aluminio',40,19.20),
 ('Jarra Cerv','Vidrio',15,13.20),
 ('Bambu','Vidrio',30,18.21),
 ('Opal BICO','Vidrio',24,12.20),
 ('Mug AAA','Ceramica',100,10.20),
 ('Mug magic','Ceramica',80,23.20),
 ('Mug Neg','Ceramica',80,22.20);
/* se verifica los registros ingresados*/
select*from Productos;

/*se crea tabla Ventas con la PK*/
create table Ventas(
Cod int not null auto_increment,
Cod_produc int not null,
Nombre_prod varchar(50) not null,
Tipo varchar(30),
Cant_vendido int(20),
constraint Pk_Ventas primary key (Cod),
constraint Fk_Productos foreign key (Cod_produc) REFERENCES Productos(Cod));

/*Se Verifica la estructura de la tabla*/
describe Ventas;

drop table Ventas;

/*se inserta los registros de  VENTAS*/
insert into Ventas(Cod_produc,Nombre_prod,Tipo,Cant_vendido) 
values 
 (1,'Lata gase','Aluminio',10),
 (2,'Caramañola pit','Aluminio',8),
 (3,'Caramañola rosc','Aluminio',20),
 (4,'Jarra Cerv','Vidrio',12),
 (5,'Bambu','Vidrio',15),
 (6,'Opal BICO','Vidrio',8),
 (7,'Mug AAA','Ceramica',50),
 (8,'Mug magic','Ceramica',30),
 (9,'Mug Neg','Ceramica',25);
/* se verifica los registros ingresados*/
select*from Ventas; 

/* se borra la tabla VENTAS PARA HACER EL procedimiento de condicional*/
drop table Ventas; 

-- procedemos a verificar cuales son los productos mas vendidos 
select Cod, Nombre_prod, Tipo, if (Cant_vendido >=20, "Mas vendido", "Menor vendido") as Estado
from Ventas;


/*Los procedimientos en Msql*/
/*se borra el procedimiento si esxiste "Proc_Cantidad" */
drop procedure if exists Proc_Cantidad;

/*Se crea un procedimiento almacenado llamado Cantidad
para saber cuales son los productos que estan por debajo 
del stock de 50 unidades*/
delimiter //
create procedure Proc_Cantidad()
begin 
  select * from Productos where Cantidad <=50;
 end //
delimiter ;
call Proc_Cantidad();

/*se borra el procedimiento si esxiste "Proc_Cantidad" */
drop procedure if exists Proc_Cantidad2;

/*Se crea un procedimiento almacenado llamado Cantidad2
para saber cuales son los productos que estan por encima  
del stock de 50 unidades*/
delimiter //
create procedure Proc_Cantidad2()
begin 
  select * from Productos where Cantidad >=50;
 end //
delimiter ;
call Proc_Cantidad2();

/*se borra el procedimiento si esxiste "Proc_Precio" */
drop procedure if exists Proc_Precio;

/*Se crea un procedimiento almacenado llamado "Precio"
para saber cuales son los productos mas costosos del stock */
delimiter $$
-- se define un procedimiento llamado "procedimientos"
use procedimientos $$
-- se crea procedimiento "Proc_Precio()"
create procedure Proc_Precio()
begin 
-- Selecciona todos los registros de la tabla "Productos"
-- donde el campo "Precio" sea mayor o igual a 22.20.
  select * from Productos where Precio >=22.20;
-- Finaliza el procedimiento
 end $$
-- Restaura el delimitador predeterminado al punto y coma. delimitador; 
delimiter ;
-- Llama al procedimiento almacenado "Proc_Precio" que  se acabo de definir.
call Proc_Precio();

/*FUNCIÓN IF PARA CONSULTAR
INFORMACIÓN DE VARIAS TABLAS SOBRE
MYSQL CASE JOIN*/
-- se llama de las tabla Productos para verificar si hay existencias  
SELECT e.Nombre_prod, IF(COUNT(l.Cod) > 0, 'Si', 'No') AS existencias 
FROM Productos AS e 
LEFT JOIN Ventas AS l ON e.Cod = l.Cod_produc 
GROUP BY e.Nombre_prod;


/*Funciones Almacenadas a
través de Mysql y otras clases*/
-- Funciones,  calculamos la cantidad que nos queda en la tabla productos 
-- y se restan con la tabla productos Vendidos
drop function calcularstock; 
delimiter //
create function calcularstock(Cantidad int(10),Cant_vendido int(20)) returns int
begin 
    declare stock int;
    set stock = Cantidad - Cant_vendido;
    return stock;
end //
delimiter //
select *, calcularstock(Cantidad, Cant_vendido) as stock from Productos,Ventas;


/*DISPARADORES ( TRIGGERS UPDATE
DELETE INSERT TRIGGER*/
/*se borra el trigger si existe before_productos_update*/
drop trigger if exists before_productos_update;

delimiter //
create trigger before_productos_update
  before update 
  on Productos
  for each row
begin
 insert into Ventas(Nombre_prod,Tipo, Cantidad, Precio) values (old.Nombre_prod, old.Tipo, old.Cantidad, old.Precio);
 end//
 delimiter ;
 /*Este triggers se dispara cadavez que ejecutemos el comando SQL 'update'con la tabla PRODUCTOS;
 before update Ventas on Productos*/
 insert into Productos(Nombre_prod,Tipo, Cantidad, Precio) values ('Termo pitillo','Termos',200,20.03);
  /*LISTAMOS LA TABLA Productos*/
 select * from Productos;
 
delimiter //
create trigger before_Ventas_update
  before update 
  on Ventas
  for each row
begin
 insert into Productos(Nombre_prod,Tipo, Cant_vendido) values (old.Nombre_prod, old.Tipo, old.Cant_vendido);
 end//
 delimiter ;
 
 /*AHORA LISTAMOS LA TABLA VENTAS Y VISUALISAMOS LAS CANTIDADES VENDIDAS*/
  select * from Ventas;


/*Procedemos a modificar de el TIPO EN PRODUCTOS  mediante el comando update POR MEDIO DE LA PK*/
update Ventas set Tipo='Termo vidrio' where Cod='9';

/*Procedemos a modificar de el TIPO EN PRODUCTOS  mediante el comando update POR MEDIO DE LA PK en mug magi*/
update Ventas set Tipo='OPAL vidrio'where Cod='10';
/*SE CAMBIA EL NOMBRE DE LA COLUMNA "Cantidad" por STOCK*/
ALTER TABLE  Productos CHANGE Cantidad  STOCK int(10);
select * from Productos;
 
/* Borramos la existencia de ella, en relación al
 nombre que se le colocara */
drop view if exists VistaVentas;

/*Creamos la vista_Ventas*/
-- Crea una vista de VistaVentas
/*Esta es la parte de la consulta SELECT donde estamos seleccionando las columnas que

V.Cod AS Cod_Venta: Seleccionamos
V.Nombre_prod AS Producto_Vendido:
V.Tipo AS Tipo_Producto: Seleccionamos la columna "Tipo" de la tabla
V.Cant_vendido AS Cantidad_Vendida:  Seleccionamos la columna "Cant_vend
P.Precio AS Precio_Unitario: Esta selección
V.Cant_vendido * P.Precio AS Total_Venta: Calculamos el total de la venta
 multiplicando la cantidad vendida por el precio unitario y le damos el alias "Total_Venta".
 En esta sección, estamos especificando las pestañas.

FROM Ventas V: Aquí estamos especificando que los datos provienen de la tabla "Ventas", y le damos el alias 
"V" para facilitar la referencia a esta tabla en la consulta.
INNER JOIN Productos P ON V.Cod_produc = P.Cod: Estamos conscientes*/

CREATE VIEW VistaVentas AS
SELECT V.Cod AS Cod_Venta, V.Nombre_prod AS Producto_Vendido, V.Tipo 
AS Tipo_Producto, V.Cant_vendido AS Cantidad_Vendida, P.Precio 
AS Precio_Unitario, V.Cant_vendido * P.Precio AS Total_Venta
FROM Ventas V
INNER JOIN Productos P ON V.Cod_produc = P.Cod;

SELECT * FROM VistaVentas;

-- se borra la base de datos
drop database lordartDYC;
