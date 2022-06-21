<?php 
	
	include("conexion.php");

	if (isset($_GET['Id'])) {
		$id=$_GET['Id'];
		$sql="DELETE FROM usuarios WHERE Id=$id";
		$query=mysqli_query($conexion,$sql);

		if($query){
        header ("Location: Clientes.php");
        }
    	else {
        	echo "Registro Eliminado";
    	}
	}
?>