<?php
session_start();
?>
<?php
include('conexion.php');
$USUARIO=$_POST['email'];
$PASSWORD=$_POST['pass'];

$consulta="SELECT * FROM usuarios where email= '$USUARIO' and pass='$PASSWORD'";
$resultado= mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_assoc($resultado);



if ($fila['email'] == 'johana@admi.com') {
   
    header("location: ../Administrador/index.html");
    $row=mysqli_fetch_array($resultado);
    session_start();
    $_SESSION['Id']=$row['Id'];
    $_SESSION['nombre']=$row['nombre'];
    
} else {
    include("login.html");
    ?>
    <h1>ERROR, INGRESA DATOS CORRECTOS</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>