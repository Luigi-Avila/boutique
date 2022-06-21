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

    <title>ActualizarProducto</title>
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
                        <a class="nav-link active" href="reg_producto.html">Agrgar Producto</a>
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
</div>

<center>
<?php 
	include("conexion.php");

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql="SELECT * FROM producto WHERE id=$id";
		$query=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($query) == 1) {
			$row = mysqli_fetch_array($query);
			$id=$row['id'];
			$nombre=$row['nombre'];
      $precio=$row['precio'];
			$descripcion=$row['descripcion'];
			$cantidad=$row['cantidad'];
			$foto=$row['foto'];
			
		}

	}

	if (isset($_POST['actualizar'])) {
		$id=$_GET['id'];
		$nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
		$descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $foto=$_POST['foto'];
		
		

		$sql="UPDATE producto SET nombre='$nombre', precio='$precio',  descripcion='$descripcion',cantidad='$cantidad', foto='$foto' WHERE id='$id'";
		mysqli_query($conexion,$sql);

		header("Location: Productos.php");
	}
?>
    <form action="actualizarP.php?id=<?php echo $_GET['id'];?>" method="POST">
		<H3>ACTUALIZA DATOS DEL PRODUCTO</H3><br>
		<b>ID del Producto:<i>*</i></b> </br>
		<input type="number" name="id"  value="<?php echo $id;?>" required><br>
		<b>Nombre:<i>*</i></b><br>
          <input type="text" name="nombre"  value="<?php echo $nombre;?>" required><br>

          <b>Precio:<i>*</i></b><br>
          <input type="number" name="precio"  value="<?php echo $precio;?>" required><br>

           <b>Descripción:<i>*</i></b><br>
          <input type="text" name="descripcion"  value="<?php echo $descripcion;?>" required><br>
          
          <b>Cantidad:<i>*</i></b><br>
          <input type="number" name="cantidad"  value="<?php echo $cantidad;?>" required><br>

          <b>Foto: </b><br> <?php echo $foto;?><br><br>
          <input type="file" value="<?php  $foto;?>" name="foto">

          
		<br>
		<button class="agregar" name="actualizar">Actualizar</button> 
    <a  class="btn btn-outline" href="Productos.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                    </a>
	</form>
</center>

</body>
</html>