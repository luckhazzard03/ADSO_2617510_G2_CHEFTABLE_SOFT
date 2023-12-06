<?php 
ini_set("display_errors",1);
error_reporting(E_ALL);

include("conexion.php");

// se declaran las variables de name="idProveedor","Nombre_prov","Direccion","Celular","Tipo_prov","E_mail"
$id=$_POST['txtidUsuario'];
$nombre=$_POST['txtNombre'];
$celular=$_POST['txtcelular'];
$password=$_POST['txtPassword'];
$tipo=$_POST['txtTipo_Usua'];
$email=$_POST['txtE_mail'];
// insersion de resgistros 
$consulta = "INSERT INTO Usuario (idUsuario, Nombre, celular, Password, Tipo_Usua, E_mail) 
VALUES ('$id', '$nombre', '$celular', '$password', '$tipo', '$email')";

$resultado=mysqli_query($conexion, $consulta) or die ("error de registro");

echo"registro exitoso";
header("location: crear_usuario.php");

mysqli_close($conexion);
