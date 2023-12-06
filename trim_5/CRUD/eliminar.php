PHP (eliminar.php): php
<?php 
                $servername = "nombre_servidor"; 
                $username = "nombre_usuario"; 
                $password = "contraseña"; 
                $dbname = "CLIENTES2";  
                $conn = new mysqli($servername, $username, $password, $dbname);  
                if ($conn->connect_error) 
                {    
                     die("Connection failed: " . $conn->connect_error); 
                     }  
                     $id_eliminar = $_POST['id_eliminar'];  
                     $sql = "DELETE FROM Usuarios WHERE ID = $id_eliminar";
                      if ($conn->query($sql) === TRUE)
                       {     
                        echo "Registro eliminado correctamente."; 
                        } 
                        else {    
                             echo "Error al eliminar el registro: " . $conn->error; }  $conn->close(); 
                             ?>