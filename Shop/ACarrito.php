
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
    <title>Carrito</title>
</head>
<body>
<?php
include ("navCar.php");

?>
     <center>
          <h2>CARRITO</h2>
          <br>
          <table class="table ">
              <thead>
                <tr>
                <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Total</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
      
              <tbody>
              <?php include('conexion.php');
                    $canti=0;
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $sql="SELECT * FROM producto WHERE id=$id";
                    $query=mysqli_query($conexion,$sql);
            
                    if(mysqli_num_rows($query) == 1) {
                        $row = mysqli_fetch_array($query);
                        $id=$row['id'];
                        $nombre=$row['nombre'];
                        $foto=$row['foto'];
                        $precio=$row['precio'];
                        $foto=$row['foto'];
                        
              ?>
              <?php $Total=$precio*$canti; 
              $canti=0;?>
                  <tr >
                    <th><?php echo $row['id']?></th>
                  <th><?php echo $row['nombre']?></th>
                    <th width="10%"
                    ><img src="../Login/IMG/<?php echo $row["foto"]?>" class="card-img"></th>
                    <th><?php echo $row['precio']?></th>
                    <th><input type="number" name="num" id="">
                     <a class="btn btn-outline btn-sm" href="total.php" value="igual">=</a></th>
                    <th><?php echo $Total?></th>
                    <th>
                    <div class="btn-group" role="group" >
                      <a class="btn btn-outline-info btn-sm" href="detallar_producto.php?id=<?php echo $row['id']?>">=</a>
                </div>       
                    </th>
                  </tr>
              <?php		
                }}
              ?>
              </tbody>		
            </table>
             
        </center>  
                             
</body>
</html>