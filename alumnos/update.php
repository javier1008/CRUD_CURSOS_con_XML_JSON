<?php
    include("../conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apell_Paterno = $_POST['apell_Paterno'];
$apell_Materno = $_POST['apell_Materno'];
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$grupo = $_POST['grupo'];
$curso = $_POST['curso'];

$sql= "UPDATE alumno SET nombre='$nombre',
 apell_Paterno='$apell_Paterno',
  apell_Materno='$apell_Materno',
   carrera='$carrera', semestre='$semestre',
    grupo='$grupo',
     curso='$curso' 
WHERE num_Control='$id'";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="updateAlumno.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="updateAlumno.php";';
	echo '</script>';
}

?>