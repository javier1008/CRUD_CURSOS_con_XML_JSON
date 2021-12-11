<?php
include("../conexion.php");

$id = $_GET['id'];
$sql = "DELETE FROM alumno WHERE num_Control='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="updateAlumno.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="updateAlumno.php";';
	echo '</script>';
}

?>