<?php
include('conexion.php');

        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $calle=$_POST['calle'];
        $colonia=$_POST['colonia'];
        $num_int=$_POST['num_int'];
        $num_ext=$_POST['num_ext'];
        $CP=$_POST['CP'];

        $sql= "INSERT INTO usuarios(nombre, telefono, email, pass, calle, colonia, num_int, num_ext,
        CP) VALUES ('$nombre','$telefono','$email','$pass','$calle','$colonia','$num_int','$num_ext','$CP')";

        $query=mysqli_query($conexion,$sql);
        if ($query) {
            echo"Bienvenid@ a Boutique Online";
            header("Location: home.html");
            
        } else {
            echo"Error";
        }
        


?>