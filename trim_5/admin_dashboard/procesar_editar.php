<?php 
// Establecer la conexión con la base de datos
include("conexion.php");

$ID = $_POST['txtidProveedor'];
$NOMBRE = $_POST['txtNombre'];
$DIRECCION = $_POST['txtDireccion'];
$CELULAR = $_POST['txtCelular'];
$TIPO = $_POST['txtTipo'];
$EMAIL = $_POST['txtE_mail'];

mysqli_query($conexion,"UPDATE Proveedor SET  Nombre_prov='$NOMBRE', Direccion='$DIRECCION', 
 Celular='$CELULAR', Tipo_prov='$TIPO', E_mail='$EMAIL' WHERE idProveedor='$ID'") or die("error de actualización");

mysqli_close($conexion);
// NOS REDIRIGE A LA PAGINA MOSTRAR.PHP
header("location: mostrar.php");
?>