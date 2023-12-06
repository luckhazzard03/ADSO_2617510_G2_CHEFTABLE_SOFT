<?php 
// Establecer la conexión con la base de datos
include("conexion.php");

$ID=$_POST['txtidUsuario'];
$NOMBRE=$_POST['txtNombre'];
$CELULAR=$_POST['txtcelular'];
$PASSWORD=$_POST['txtPassword'];
$TIPO=$_POST['txtTipo_Usua'];
$EMAIL=$_POST['txtE_mail'];

mysqli_query($conexion,"UPDATE Usuario SET  Nombre='$NOMBRE', Celular='$CELULAR', Password='$PASSWORD', 
 Tipo_Usua='$TIPO', E_mail='$EMAIL' WHERE idUsuario='$ID'") or die("error de actualización");

mysqli_close($conexion);
// NOS REDIRIGE A LA PAGINA MOSTRAR.PHP
header("location: crear_usuario.php");
?>