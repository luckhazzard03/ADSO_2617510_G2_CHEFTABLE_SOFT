/*se crea la base de datos*/
create database EMPRESA_XYZ_LTDA;
/*se Abre la base de datos*/
use EMPRESA_XYZ_LTDA;
/*se crea tabla EMPLEADOS con la PK*/
create table EMPLEADOS(
Nombre_Empleado varchar(30),
Documento  VARCHAR(20) PRIMARY KEY,
Sexo varchar(1) not null,
Domicilio varchar(100),
Sueldo_basico decimal(25,4),
Hijos_a_cargo int(10));

/*Se Verifica la estructura de la tabla*/
describe EMPLEADOS;
/*se inserta LOS REGISTROS DE LOS EMPLEADOS*/
insert into empleados ( Nombre_Empleado,Documento,Sexo,Domicilio,Sueldo_basico,Hijos_a_cargo)
values
('Juan Perez','22333444','M', 'Cr38 20-50',910000,1),
('Ana Acosta','21333444','F','Cr50 14-50',120000,2),
('Alberto Lopez','24333444','M','Cr30 1-50',254865.50,2),
('Carlos Sanchez','30333444','M','Cr32 20-50',545035.90,3),
('Mariana Torres','23444555','F','Cr50 20-50',197085.40,1),
('Marcos Garcia','23664555','M','Cr68 20-50',170060.80,4);
/* se verifica los registros ingresados*/
select*from EMPLEADOS;
/*SE Calcula el nuevo sueldo básico con un aumento del 10%*/
SELECT Nombre_Empleado, Sueldo_basico, (Sueldo_basico + (Sueldo_basico * 0.1)) AS nuevo_sueldo
FROM EMPLEADOS;
/*Se Calcula el salario familiar y el sueldo final*/
SELECT Nombre_Empleado, Sueldo_basico,Hijos_a_cargo, (200 * Hijos_a_cargo) AS salario_familiar,
       (Sueldo_basico + (200 * Hijos_a_cargo)) AS sueldo_final
FROM EMPLEADOS;
/* Se Calcula el pago del sueldo básico más la bonificación para empleados femeninos:*/
SELECT Nombre_Empleado, (Sueldo_basico + 500000) AS pago_sueldo_bonificado
FROM EMPLEADOS
WHERE Sexo = 'F';