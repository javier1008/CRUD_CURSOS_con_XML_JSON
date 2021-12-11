<?php
include("../conexion.php");

$num_Control = $_POST['num_Control'];
$nombre =$_POST['nombre'];
$apell_Paterno =$_POST['apell_Paterno'];
$apell_Materno =$_POST['apell_Materno'];
$cedula =$_POST['cedula'];
$curso=$_POST['curso'];

$sql= "INSERT INTO docente VALUES 
('$num_Control','$nombre','$apell_Paterno',
'$apell_Materno','$cedula','$curso')";

if(mysqli_query($mysqli, $sql)){
	header("Location: docente_agregar.php");
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
    /*echo 'window.location="alumno_agregar.php";';*/
	echo '</script>';    
}
else{
    echo '<script language="javascript">';
	echo 'alert("NO SE PUDO");';
	echo '</script>'; 
}
?>