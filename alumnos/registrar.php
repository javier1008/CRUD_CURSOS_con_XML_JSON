<?php
include("../conexion.php");

$num_Control = $_POST['num_Control'];
$nombre =$_POST['nombre'];
$apell_Paterno =$_POST['apell_Paterno'];
$apell_Materno =$_POST['apell_Materno'];
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$grupo =$_POST['grupo'];
$curso=$_POST['curso'];

$sql= "INSERT INTO alumno VALUES 
('$num_Control','$nombre','$apell_Paterno',
'$apell_Materno','$carrera','$semestre','$grupo','$curso')";

if(mysqli_query($mysqli, $sql)){
	header("Location: alumno_agregar.php");
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
    /*echo 'window.location="alumno_agregar.php";';*/
	echo '</script>';    
}
else{
    echo '<script language="javascript">';
	echo 'alert("Registro sin Exito");';
	echo '</script>'; 
}
?>