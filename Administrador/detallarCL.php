<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../Shop/clientest.css" rel="stylesheet" type="text/css">
    <title>Productos</title>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg  navbar-scrollmax-height">
            <div class="container-fluid">
               <span class="navbar-brand mb-0 h1 fw-bold fs-3">Boutique Online</span>
              <div class="container-fluid  navbar-light" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item fs-6 ">
                        <a class="nav-link active" aria-current="page" href="../Administrador/index.html">Inicio</a>
                      </li>
                      <li class="nav-item fs-6">
                        <a class="nav-link active" href="Productos.php">Productos</a>
                      </li>
                      <li class="nav-item fs-6">
                        <a class="nav-link active" href="stock.php">Stock</a>
                      </li> 
                      <li class="nav-item fs-6">
                        <a class="nav-link active" href="reg_producto.html">Agregar Producto</a>
                      </li> 
                      <li class="nav-item fs-6 ">
                        <a class="nav-link active" aria-current="page" href="#">Ventas</a>
                      </li>
                      <li class="nav-item fs-6 ">
                        <a class="nav-link active" aria-current="page" href="#">Apartados</a>
                      </li>
                      <li class="nav-item fs-6 ">
                        <a class="nav-link active" aria-current="page" href="Clientes.php">Clientes</a>
                      </li>
                </ul>
              </div>
            </div>
          </nav>

           
        <center>
          <h2>DETALLE CLIENTE</h2>
          <br>
          <div >
                  
              <tbody>
              <?php
                include("conexion.php");
                if (isset($_GET['Id'])) {
                    $Id=$_GET['Id'];
                    $sql="SELECT * FROM usuarios WHERE Id=$Id";
                    $query=mysqli_query($conexion,$sql);
            
                    if(mysqli_num_rows($query) == 1) {
                        $row = mysqli_fetch_array($query);
                        $Id=$row['Id'];
			            $nombre=$row['nombre'];
                        $telefono=$row['telefono'];
                        $email=$row['email'];
                        $pass=$row['pass'];
                        $calle=$row['calle'];
                        $colonia=$row['colonia'];
                        $num_int=$row['num_int'];
                        $num_ext=$row['num_ext'];
                        $CP=$row['CP'];
                        
                    }
            
                }
      
              ?>
              </tbody>		

            </div>
            <div class="card" style="width: 18rem;">
                <!-- <img src="../Login/IMG/<?php echo $row["foto"]?>" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h4>Datos De Identidad</h4>
                    <h6 class="card-title">ID: <?php echo $row["Id"];?></h6>
                    <h6 class="card-title">Nombre:<?php echo $row["nombre"];?></h6>
                    <h6 class="card-title">Telefono: <?php echo $row["telefono"];?></h6>
                    <h6 class="card-title">Email:<?php echo $row["email"];?></h6>
                    <h6 class="card-title">Contraseña:<?php echo $row["pass"];?></h6>
                </div>
                <div class="card-body">
                    <h4>Datos Personales</h4>
                    <h6 class="card-title">Calle:<?php echo $row["calle"];?></h6>
                    <h6 class="card-title">Colonia:<?php echo $row["colonia"];?></h6>
                    <h6 class="card-title">Num. Interior: <?php echo $row["num_int"];?></h6>
                    <h6 class="card-title">Num. Exterior: <?php echo $row["num_ext"];?></h6>
                    <h6 class="card-title">CP: <?php echo $row["CP"];?></h6><br/>
                    <a  class="btn btn-outline" href="Clientes.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                    </a>

                    <a  class="btn btn-outline" href="actualizarCL.php?Id=<?php echo $row['Id']?>"> Editar<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>           
                    </a>
                </div>

          

            </div>
        </center>
        </div>
</body>
</html>