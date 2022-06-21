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

    <title>ActualizarCliente</title>
</head>
<body>
<div>
  </div>
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

	if (isset($_POST['actualizar'])) {
        $Id=$_GET['Id'];
        $nombre=$_POST['nombre'];
		    $telefono=$_POST['telefono'];
        $email=$_POST['email'];
	    	$pass=$_POST['pass'];
        $calle=$_POST['calle'];
        $colonia=$_POST['colonia'];
        $num_int=$_POST['num_int'];
        $num_ext=$_POST['num_ext'];
        $CP=$_POST['CP'];
		
		

		$sql="UPDATE usuarios SET nombre='$nombre', telefono='$telefono', email='$email',  pass='$pass', calle='$calle', colonia='$colonia', num_int='$num_int', num_ext='$num_ext', CP='$CP' WHERE Id='$Id'";
		mysqli_query($conexion,$sql);

		header("Location: Clientes.php");
	}
?>
    <form class="form_reg" action="actualizarCL.php?Id=<?php echo $_GET['Id'];?>" method="POST">
		<H3>ACTUALIZA DATOS DEL CLIENTE</H3><br>
        <br/>
                        Nombre Completo:
                        <input type="text" name="nombre" value="<?php echo $nombre;?>" required>
                        
                        Telefono:
                        <input type="number" name="telefono" value="<?php echo $telefono;?>" required >
                        
                        Email:
                        <input type="email" name="email" value="<?php echo $email;?>" required>
                        
                        Contraseña:
                        <input type="text" name="pass" value="<?php echo $pass;?>" required>
                        <br/>
                        <h4>DATOS DE DOMICILIO</h4> 
                        <br/>
                        Calle:
                        <input type="text" name="calle"  value="<?php echo $calle;?>" required>
                        
                        Colonia :
                        <input type="text" name="colonia" value="<?php echo $colonia;?>" required>
                       
                        Num. Interior :
                        <input type="number" name="num_int" value="<?php echo $num_int;?>" required>
                        Num. Exterior : 
                        <input type="number" name="num_ext" value="<?php echo $num_ext;?>" required>
                        
                        Código Postal :
                        <input type="number" name="CP" value="<?php echo $CP;?>" require>
		<br/>
    <br/>	<button class="agregar" name="actualizar">Actualizar</button> <br/>
	</form>
</center>

</body>
</html>