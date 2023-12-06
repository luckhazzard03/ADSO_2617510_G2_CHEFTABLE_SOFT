<html>
<html>

<head>
    <title>Pagina 2 en PHP para la conexion con el Codigo de MYSQL </title>
</head>

<body>
    <?php
  $conexion = mysqli_connect("localhost", "root", "", "conexion1") or
    die("Problemas con la conexión");
  mysqli_query($conexion, "insert into alumnos(codigo,nombres,correo,codigocurso) values 
                       ($_REQUEST[codigo],'$_REQUEST[nombres]','$_REQUEST[correo]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));
  mysqli_close($conexion);
  echo "El alumno fue Ingresado al Curso Seleccionado ";
  ?>
</body>

</html>