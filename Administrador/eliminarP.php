<?php 
	
	include("conexion.php");

	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$sql="DELETE FROM producto WHERE id=$id";
		$query=mysqli_query($conexion,$sql);

		if($query){
        header ("Location: Productos.php");
        }
    	else {
        	echo "Registro Eliminado";
    	}
	}
?>