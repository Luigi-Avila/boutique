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
          <h2>STOCK</h2>
          <br>
          <div >
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Entrada</th>
                  <th scope="col">Salidas</th>
                  <th scope="col">Stock</th>
                </tr>
              </thead>
      
              <tbody>
              <?php
                include("conexion.php");
      
                $sql="SELECT * FROM producto";
                $query=mysqli_query($conexion,$sql);
      
                while($row=mysqli_fetch_array($query))
                {
              ?>
                  <tr>
                    <th><?php echo $row['id']?></th>
                    <th><?php echo $row['nombre']?></th>
                    <th><?php echo $row['cantidad']?></th>
                    <th><?php echo $row['salida']?></th>
                    <th><?php

                    $entrada=$row['cantidad'];
                    $salida= $row['salida'];
                    $stock=$entrada-$salida;
                    echo $stock?></th>
                  </tr>
              <?php		
                }
              ?>
              </tbody>		
            </table>
          </div>
        </center>
        </div>
</body>
</html>