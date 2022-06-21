<?php

    include ("conexion.php");
      
    
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $foto=$_POST['foto'];
     

    $sql="INSERT INTO producto(nombre,precio,descripcion,cantidad,foto) VALUES ('$nombre','$precio','$descripcion','$cantidad', '$foto')";
    $query=mysqli_query($conexion,$sql);
    
    if($query){
        header ("Location: Productos.php");
    }
    else {
        echo "Registro no exitoso";
    }  
?>
