<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
  <title>Crear Proveedor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="admin.css" />
</head>

<body>
  <input type="checkbox" id="nav-toggle" />
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2>
        <span class=""></span>
        <span><img src="img/LOGO CHEF TABLE2-02.png" alt="" width="180px" height="90px" /></span>
      </h2>
    </div>
    <!--Secciones-del-tablero-->
    <div class="sidebar-menu">
      <ul>
        <!--Inicio-->
        <li>
          <a href="admin.html
            "><i class="fa-solid fa-house"></i> <span>Inicio</span></a>
        </li>
        <!--Administrador-->
        <li>
          <a href="administrador.html"><i class="fa-regular fa-user"></i> <span>Administrador</span></a>
        </li>
        <!--Crear usuario-->
        <li>
          <a href="crear_usuario.php"><i class="fa-solid fa-users-between-lines"></i>
            <span>Crear Usuario</span></a>
        </li>
        <!--Crear proveedor-->
        <li>
          <a href="mostrar.php" class="active"><i class="fa-solid fa-users-between-lines"></i>
            <span>Crear Proveedor</span></a>
        </li>
        <!--Inventario-->
        <li>
          <a href="inventario.html"><i class="fa-solid fa-clipboard"></i> <span>Inventario</span></a>
        </li>
        <!--Crear producto-->
        <li>
          <a href="crear_producto.html">
            <i class="fa-solid fa-upload"></i> <span>Crear producto</span></a>
        </li>
        <!--Producto faltantes-->
        <li>
          <a href="faltantes.html">
            <i class="fa-solid fa-arrow-down"></i>
            <span>Producto faltantes</span></a>
        </li>
        <!--balance ventas-->
        <li>
          <a href="balance.html"><i class="fa-solid fa-chart-simple"></i></span>
            <span> Balance de ventas</span></a>
        </li>
        <!--comanda-->
        <li>
          <a href="comanda.html"><i class="fa-solid fa-file"></i></span>
            <span> Comanda</span></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-content">
    <header>
      <h2>
        <label for="nav-toggle">
          <i class="fa-solid fa-users-between-lines"></i>
          Crear Proveedor
      </h2>

      <div class="search-wrapper">
        <span class="las la-search"><i class="fa-solid fa-magnifying-glass" style="color: #141b2f;"></i></span>
        <input type="search" placeholder="Buscar aquí" />
      </div>
      <div class="user-wrapper">
        <img src="img/pexels-cottonbro-studio-4057693.jpg" width="40px" height="55px" alt="" />
        <div>
          <h4>Administrador</h4>
          <small>Super Admin</small>
        </div>
      </div>
    </header>

    <main>

    <?php
include("conexion.php");

$consulta = "SELECT COUNT(*) as total FROM Proveedor WHERE idProveedor = 1";
$result = mysqli_query($conexion, $consulta);
$data = mysqli_fetch_assoc($result);
$totalUsuariosEliminados = $data['total'];
?>
      <div class="cards">
        <div class="card-single">
          <div>
          <h1 id="contadorUsuariosEliminados"><?php echo $totalUsuariosEliminados; ?></h1>
            <span>Proveedores Eliminados</span>
          </div>
          <div>
            <i class="fa-solid fa-users-between-lines" style="color: #141b2f;"></i>
          </div>
        </div>

        <?php
include("conexion.php");

$query = "SELECT COUNT(*) as total FROM Proveedor";
$result = mysqli_query($conexion, $query);
$data = mysqli_fetch_assoc($result);
$totalUsuarios = $data['total'];
?>


        <div class="card-single">
          <div>
          <h1 id="contadorProveedores"><?php echo $totalUsuarios; ?></h1>
            <span>PROVEEDORES CREADOS</span>
          </div>
          <div>
            <i class="fa-solid fa-address-book" style="color: #ffffff;"></i>
          </div>
        </div>
      </div>
      <style>
      /* Estilo para la tarjeta (card) */
    .card {
      border: 1px solid #ddd;
      border-radius: 8px;
      margin: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
     /* Estilo para el encabezado de la tarjeta */
     .card-visual {
      background-color: #d6d6d6;
      color: #bfbfbf;/*color de fuente formulario */
      padding: 15px;
      border-bottom: 1px solid #ddd;
      border-radius: 8px 8px 0 0;
    }
    thead tr, th .register2 {
      color: #dbdbdb;/*color de fuente formulario */

    }
     tr, th .register {
      color: #19191a;/*color de fuente formulario */

    }
   
    /* Estilo para el encabezado de la tarjeta */
    .card-header {
      background-color: #d6d6d6;
      color: #48494a;/*color de fuente formulario */
      padding: 15px;
      border-bottom: 1px solid #ddd;
      border-radius: 8px 8px 0 0;
    }

    /* Estilo para la tabla */
    .table-responsive {
      width: 100%;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    /* Estilo para las celdas del encabezado */
    thead th {
      
      background-color: #141b2f;
      padding: 20px;
      text-align: center;
    }

    /* Estilo para las celdas de datos */
    tbody th,
    tbody td {
      padding: 15px;
     
    }

    /* Estilo para las celdas de acciones */
    tbody th {
      text-align: center;
    }

    /* Estilo para los enlaces de acciones */
    a {
      text-decoration: none;
      color: #141b2f;
    }

    a:hover {
      text-decoration: underline;
    }

    /* Estilo para el botón de eliminar */
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border-radius: 5px;
      padding: 8px 8px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #c82333;
    }
  </style>
      <!-- mostrar listar  proveedores-->
	  <div class="card-body">
    <div class="projects">
          <div class="card">
            <div class="card-visual">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    <tr class= "register2">
                      <th scope="col">Id.Proveedor</th>
					            <th scope="col">Nombre</th>
					            <th scope="col">Direccion</th>
					            <th scope="col">Celular</th>
					            <th scope="col">Tipo</th>
					            <th scope="col">Email</th>  
                      <th scope="col">Acciones</th>          
				
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $sql = "SELECT * FROM Proveedor LIMIT 10"; 
                    $result = mysqli_query($conexion,$sql);  

                    while($mostrar = mysqli_fetch_array($result)){
                    ?>
				            <tr class="register">
                      <th><?php echo $mostrar['idProveedor'] ?></th>
                      <th><?php echo $mostrar['Nombre_prov'] ?></th>
                      <th><?php echo $mostrar['Direccion'] ?></th>
                      <th><?php echo $mostrar['Celular'] ?></th>
                      <th><?php echo $mostrar['Tipo_prov'] ?></th>
                      <th><?php echo $mostrar['E_mail'] ?></th>	

                      
                      <th>
                        <!--formulario de editar-->
                        <a href="actualizarprove.php?id=<?php echo $mostrar['idProveedor'] ?>">Editar</a>
                        <!--formulario de eliminar-->
                        <form action="eliminarprove.php" method="POST">
                          <input type="text" value="<?php echo $mostrar['idProveedor'] ?>" style="display: none;" name="txtID" readonly>
                          <td><input type="submit" value="Eliminar" name= "btnEliminar"></td>
                        </form>
                      </th>
                      
                      			                       
				            </tr>
   
                    
                    <?php
                  }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
            </div>


            
</div>

</div>
      <!--Tabla-->
      <div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <div class="form-container">
                <h2>Registro de Proveedores</h2><br>
                <!--formulario registro de proveedores-->
                <form action="registro.php" method="POST">
                  <div class="form-group">
                    <label for="id_Prove">ID Proveedor:</label>
                    <input type="text" id="id_Prove" name="txtidProveedor" required>
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="txtNombre" required>
                  </div>

                  <div class="form-group">
                    <label for="Direccion">Direccion:</label>
                    <input type="text" id="Direccion" name="txtDireccion" required>
                  </div>
                  <div class="form-group">
                    <label for="Celular">Telefono:</label>
                    <input type="text" id="Celular" name="txtCelular" required>
                  </div>
                  <div class="form-group">
                    <label for="Tipo_prov">Tipo de Proveedor:</label>
                    <input type="text" id="Tipo_prov" name="txtTipo" required>
                  </div>
                  <div class="form-group">
                    <label for="E_mail">E-mail:</label>
                    <input type="email" id="E_mail" name="txtE_mail" required>
                  </div>
                  <button class="registro.php" type="submit">Registrar Proveedor</button>
                </form> <br>             
                
                
              </div>
            </div>


            
          </div>

        </div>

        <div class="customers">
          <div class="card">
            <div class="card-header">
              <h3>PROVEEDORES CREADOS</h3>


            </div>

            <div class="card-body">
              <div class="customer">
                <div class="info">
                  <img src="img/pexels-viktor-smith-1393382.jpg" width="40px" height="55px" alt="" />
                  <div>
                    <h4>CORBETAS S.A.S</h4>
                    <small>GRANOS</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="lab la-whatsapp"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                  <img src="img/pexels-lisa-fotios-19046542.jpg" width="40px " height="55px " alt=" " />
                  <div>
                    <h4>FRUBANA</h4>
                    <small>VERDURAS</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="lab la-whatsapp"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                  <img src="img/pexels-federico-arnaboldi-6138720.jpg" width="40px " height="55px " alt=" " />
                  <div>
                    <h4>CARNES VALLE DE CAFAM</h4>
                    <small>CARNICOS</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="lab la-whatsapp"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  
</body>

</html>