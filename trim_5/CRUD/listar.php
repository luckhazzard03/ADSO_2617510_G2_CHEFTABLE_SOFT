//PHP (listar.php): 
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
    $sql = "SELECT * FROM Usuarios LIMIT 10"; 
    $result = $conn->query($sql);  
    if ($result->num_rows > 0) 
    {     
        echo "<table>";     
        echo "<tr><th>Identificación</th><th>Nombres</th><th>Sexo</th><th>Dirección</th><th>Correo</th><th>Fecha de Nacimiento</th><th>Móvil</th><th>Edad</th></tr>";     
        while($row = $result->fetch_assoc()) 
        {         
            echo "<tr>";         
            echo "<td>".$row['Identificacion']."</td>";         
            echo "<td>".$row['Nombres']."</td>";         
            echo "<td>".$row['Sexo']."</td>";         
            echo "<td>".$row['Direccion']."</td>";         
            echo "<td>".$row['Correo']."</td>";         
            echo "<td>".$row['Fecha_Nac']."</td>";         
            echo "<td>".$row['Movil']."</td>";         
            echo "<td>".$row['Edad']."</td>";         
            echo "</tr>";     
        }     
            echo "</table>"; 
            }
             else {     
                echo "No se encontraron registros."; }  $conn->close(); 
                ?> 