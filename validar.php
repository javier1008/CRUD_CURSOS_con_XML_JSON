<?php
include("conexion.php");
/*session_start();*/
$username = $_POST['usuario'];
$password = $_POST['password'];

$username = $mysqli->real_escape_string($username);//corregir la mala captura
$query="SELECT usuario, password FROM usuarios WHERE usuario='$username' AND password='$password';";
$conexion = $mysqli->query($query);
if($conexion->num_rows ==1)
{
    header("Location:home.php");
}
else{
    header("Location:index.html");
}
?>
