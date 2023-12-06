<?php
/*conexion a base de datos archivo conexion.php*/
include('conexion.php');
/*declaramos variables $usuario y $contraseña*/
$usuario=$_POST['usuario'];
$PASSWORD=$_POST['Password'];
session_start();
$_SESSION['usuario']=$usuario;



/*VARIABLE CONSULTA DONDE LLAMAMOS LA TABLA USUARIOS */
$consulta="SELECT*FROM Personal where Usuario='$usuario' and Password='$PASSWORD'";
$resultado=mysqli_query($conexion,$consulta);
/*CONEXION RESULTADO */
$filas=mysqli_num_rows($resultado);
/*SI CUMPLE CON LOS DATOS REGISTRADOS INGRESA AL admin.html */
if($filas){
  
    header("location:admin.html");
/*SI NO CUMPLE CON LOS DATOS REGISTRADOS SE MANTIENE EN LA PAGINA INICIO DE SESION CON EL MENSAJE 
ERROR DE AUTENTICACIÓN */
}else{
    ?>
    <?php
    include("inicio_sesion.html");
    echo '<style>
        .bad {
          position: fixed;
          top: 20px;
          left: 0;
          width: 100%;
          text-align: center;          
          color: red;
          font-size: 24px;
        }
    </style>';

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
/*ALMACENA EL RESULTADO */
mysqli_free_result($resultado);
/*CIERRA LA CONEXION DE LA BASE DE DATOS */
mysqli_close($conexion);