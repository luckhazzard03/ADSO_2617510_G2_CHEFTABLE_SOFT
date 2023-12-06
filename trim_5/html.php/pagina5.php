<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "ejemplo1") or
      die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select nombres,correo,codigocurso
                          from alumnos where codigo=$_REQUEST[codigo]") or
      die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
      echo "Nombres:" . $reg['nombres'] . "<br>";
      echo "Correo:" . $reg['correo'] . "<br>";
      echo "Curso:";
      switch ($reg['codigocurso'])
       {
        case 1:
          echo "PHP";
          break;
        case 2:
          echo "ASP";
          break;
        case 3:
          echo "JSP";
          break;
        case 4:
          echo "OTRO";
          break;
       }
    } 
    else {
        echo "No existe un alumno con ese codigo.";
    }
        mysqli_close($conexion);
    ?>
</body>

</html>