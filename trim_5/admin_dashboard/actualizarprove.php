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
          <a href="proveedor.php" class="active"><i class="fa-solid fa-users-between-lines"></i>
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
      <div class="cards">
        <div class="card-single">
          <div>
            <h1>0</h1>
            <span>Proveedores Eliminados</span>
          </div>
          <div>
            <i class="fa-solid fa-users-between-lines" style="color: #141b2f;"></i>
          </div>
        </div>



        <div class="card-single">
          <div>
            <h1>3</h1>
            <span>PROVEEDORES CREADOS</span>
          </div>
          <div>
            <i class="fa-solid fa-address-book" style="color: #ffffff;"></i>
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
		<div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <div class="form-container">
                
                
        
    <div>
      <!-- mostrar listar  proveedores-->
	  <div class="card-body">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    
                  </thead>
				  <style>
					
				  form {
                    max-width: 400px;
                    margin: 0 auto;
                  }

                  p {
	               margin-left:50px ;
                   margin-top: 10px;
                   margin-bottom: 3px;
				   
                  }

                input {
                 width: 70%;
	             margin-left:70px ;
	             padding: 8px;
                 margin-bottom: 5px;
                 box-sizing: border-box;
	             border-radius: 8px;
				 
                }

                 input[type="submit"] {
                   background-color: #4CAF50;	  
                   color: white;
                   cursor: pointer;
	               border-radius: 8px;
	
	  
                }

                input[type="submit"]:hover {
                     background-color: #141b2f;
                }
	            .card {
                    border: .05px solid #ddd;
                    border-radius: 8px;
                    margin: 20px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
                  </style>
                  <tbody>
                    <?php
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM Proveedor WHERE idProveedor='$id' LIMIT 10"; 
                    $result = mysqli_query($conexion,$sql);  

                    while($mostrar = mysqli_fetch_array($result)){
                    ?>
					<!--formulario de editar "actualizarprove.php  Nombre_prov, Direccion, Celular, Tipo_prov, E_mail-->
				    <form action="procesar_editar.php" method="post">
						<input type="hidden" value="<?php echo $mostrar['idProveedor'] ?>" name="txtidProveedor">
						<p>Nombre</p>
						<input type="text" value="<?php echo $mostrar['Nombre_prov'] ?>" name="txtNombre">
						<p>Direccion</p>
						<input type="text" value="<?php echo $mostrar['Direccion'] ?>" name="txtDireccion">
						<p>Celular</p>
						<input type="text" value="<?php echo $mostrar['Celular'] ?>" name="txtCelular">
						<p>Tipo</p>
						<input type="text" value="<?php echo $mostrar['Tipo_prov'] ?>" name="txtTipo">
						<p>Email</p>
						<input type="text" value="<?php echo $mostrar['E_mail'] ?>" name="txtE_mail">
					
                    
                    <?php
                  }
                    ?>
					<input type="submit" value="actualizar">
					</form>

                  </tbody>
                </table>
              </div>
        </div>
		</div>
            </div>


            
          </div>

        </div>

        </div>
      </div>	
      <!--Tabla-->
      
	</div>
</div>
    </main>
  </div>
</body>

</html>