<?php 
ini_set("display_errors",1);
error_reporting(E_ALL);

include("conexion.php");

// se declaran las variables de name="idProveedor","Nombre_prov","Direccion","Celular","Tipo_prov","E_mail"
$id=$_POST['txtidProveedor'];
$nombre=$_POST['txtNombre'];
$direccion=$_POST['txtDireccion'];
$celular=$_POST['txtCelular'];
$tipo=$_POST['txtTipo'];
$email=$_POST['txtE_mail'];
// insersion de resgistros 
$consulta = "INSERT INTO Proveedor (idProveedor, Nombre_prov, Direccion, Celular, Tipo_prov, E_mail) 
VALUES ('$id', '$nombre', '$direccion', '$celular', '$tipo', '$email')";

$resultado=mysqli_query($conexion,$consulta) or die ("error de registro");

echo"registro exitoso";
header("location: mostrar.php");

mysqli_close($conexion);




?>