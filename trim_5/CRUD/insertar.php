<?php 
   $servername = "nombre_servidor"; 
   $username = "nombre_usuario"; 
   $password = "contraseña"; 
   $dbname = "CLIENTES1";  
   $conn = new mysqli($servername, $username, $password, $dbname);  
        if ($conn->connect_error) 
        {     
          die("Connection failed: " . $conn->connect_error); 
         }  
$identificacion = $_POST['identificacion']; 
$nombres = $_POST['nombres'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion']; 
$correo = $_POST['correo']; 
$fecha_nac = $_POST['fecha_nac']; 
$movil = $_POST['movil']; 
$edad = $_POST['edad'];  
$sql = "INSERT INTO Usuarios (Identificacion, Nombres, Sexo, Direccion, Correo, Fecha_Nac, Movil, Edad)
       VALUES ('$identificacion', '$nombres', '$sexo', '$direccion', '$correo', '$fecha_nac', '$movil', '$edad')"; 
     if ($conn->query($sql) === TRUE) 
     {    
         echo "Registro insertado correctamente."; 
     } 
     else 
     {     
        echo "Error al insertar el registro: " . $conn->error; 
     }  
     $conn->close(); 
?>