<?php
$query = "SELECT * FROM alumno WHERE curso='CSS'";
$resultado = filtro($query);

function filtro($query){
    include("../conexion.php");
    $filtrar_dato = mysqli_query($mysqli,$query);
    return $filtrar_dato;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo_alumno.css">
    <title>Modificación</title>
</head>
<body>
<header class="header">
    <nav class="navegacion">
			<ul class="menu">
            <li class="nav-menu-item"><a href="../home.php" class="nav-menu-link nav-link"><strong>INICIO</strong></a></li>        
            <li class="nav-menu-item"><a href="#"class="nav-menu-link nav-link">ALUMNOS</a>
                <ul class="submenu">
						<li class="li_class"><a href="../alumnos/alumno_agregar.php">Registro</a></li>
						<li class=""><a href="../docentes/updateDocente.php">Gestionar</a></li>
                        <li class=""><a href="../alumnos/alumno_consultar.php">Consulta</a></li>
                        <li class=""><a href="../alumnos/xmlAlumno.php">XML</a></li>
                        <li class=""><a href="../alumnos/Json_Alumno.php">JSON</a></li>

					</ul>
                </li>
				<li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">DOCENTES</a>
                <ul class="submenu">
						<li><a href="../docentes/docente_agregar.php" >Registro</a></li>
						<li><a href="../docentes/updateDocente.php">Gestionar</a></li>
                        <li><a href="../docentes/consultaDocente.php">Consulta</a></li>
                        <li><a href="../docentes/xmlDocente.php">XML</a></li>
                        <li><a href="../docentes/jsonDocente.php">JSON</a></li>
					</ul>
                </li>
				<li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">CURSOS</a>
					<ul class="submenu">
						<li><a href="../cursos/consultaHtml5.php">HTML5</a></li>
						<li><a href="#">CSS</a></li>
						<li><a href="../cursos/consultaJavascript.php">JavaScript</a></li>
					</ul>
				</li>
                <li class="nav-menu-item"><a href="../index.html" class="nav-menu-link nav-link">SALIR</a></li>
			</ul>
		</nav>
</header>
    <br>
    <?php 
    echo "<h2>ALUMNOS INSCRITOS AL CURSO DE <strong>CSS</strong></h2>";
    echo "<table border='2'>
    <tr>
    <th>Número de Control</th>
    <th>Nombre(s)</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Carrera</th>
    <th>Semestre</th>
    <th>Grupo</th>
    </tr>";

    while($row=mysqli_fetch_array($resultado))
    {
        echo"<tr>";
        echo "<td>" .$row['num_Control']. "</td>";
        echo "<td>" .$row['nombre']. "</td>";
        echo "<td>" .$row['apell_Paterno']. "</td>";
        echo "<td>" .$row['apell_Materno']. "</td>";
        echo "<td>" .$row['carrera']. "</td>";
        echo "<td>" .$row['semestre']. "</td>";
        echo "<td>" .$row['grupo']. "</td>";
        echo "</tr>";        
    }
    echo "</table>";
    ?>
</body>
</html>
