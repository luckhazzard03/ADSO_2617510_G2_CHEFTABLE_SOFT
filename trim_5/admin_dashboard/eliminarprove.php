<?php
// Establecer la conexión con la base de datos
include("conexion.php");
// LLAMO LA VARIABLE ID 
$ID=$_POST['txtID'];
// Realizar una consulta para obtener el proveedor con el id 
mysqli_query($conexion,"DELETE FROM Proveedor WHERE idProveedor='$ID'") or die ("error al eliminar");
// Cerrar la conexión con la base de datos
mysqli_close($conexion);
// NOS REDIRIGE A LA PAGINA MOSTRAR.PHP
header("location: mostrar.php");
?>