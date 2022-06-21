<?php 
	
	include("conexion.php");
    
    $resultado=0;
    $calcular ='igual';

		if(isset($_GET['num1'], $_GET['num2'], $_GET['igual'])){
            $resultado=$precio*$cantidad;
        header ("Location: ACarrito.php");
        }
    	else { $resultado=$precio*$cantidad;

        	echo "Registro Eliminado";
    	}
?>