PHP (borrar.php): php
<?php $servername = "nombre_servidor"; 
        $username = "nombre_usuario"; 
        $password = "contraseña"; 
        $dbname = "CLIENTES1";  
        $conn = new mysqli($servername, $username, $password, $dbname); 
         if ($conn->connect_error) 
         {     
            die("Connection failed: " . $conn->connect_error); 
            } 
             $id_borrar = $_POST['id_borrar']; 
             $sql = "DELETE FROM Usuarios WHERE ID = $id_borrar";  
             if ($conn->query($sql) === TRUE) {     echo "Registro borrado correctamente.";
              } 
              else {     
                echo "Error al borrar el registro: " . $conn->error; 
                }  
                $conn->close(); 
                ?>

