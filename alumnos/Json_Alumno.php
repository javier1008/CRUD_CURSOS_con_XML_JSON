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
						<li class=""><a href="../alumnos/updateAlumno.php">Gestionar</a></li>
                        <li class=""><a href="../alumnos/alumno_consultar.php">Consulta</a></li>
                        <li class=""><a href="../alumnos/xmlAlumno.php">XML</a></li>
            <li class=""><a href="#">JSON</a></li>
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
						<li><a href="../cursos/consultaCSS.php">CSS</a></li>
						<li><a href="../cursos/consultaJavascript.php">JavaScript</a></li>
					</ul>
				</li>
                <li class="nav-menu-item"><a href="../index.html" class="nav-menu-link nav-link">SALIR</a></li>
			</ul>
		</nav>
</header>
<h2 id='tituloxml'>Datos de Alumnos en Formato JSON</h2>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "cursos";
//Conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql = "SELECT * FROM alumno";
mysqli_set_charset($conexion, "utf8"); 

if(!$result = mysqli_query($conexion, $sql)) die();

$usuarios = array(); 
while($row = mysqli_fetch_array($result)) 
{ 	
	$num_Control=$row['num_Control'];
    $nombre=$row['nombre'];
    $apell_Paterno=$row['apell_Paterno'];
    $apell_Materno=$row['apell_Materno'];
    $carrera=$row['carrera'];
	$semestre=$row['semestre'];
	$grupo= $row['grupo'] ;
	$curso=$row['curso'];
	
	$usuarios[] = array('num_Control'=> $num_Control,
                        'nombre'=> $nombre,
                        'apell_Paterno'=> $apell_Paterno,
                        'apell_Materno'=> $apell_Materno,
                        'carrera'=> $carrera,
                        'semestre'=> $semestre,
                        'grupo'=> $grupo,
						'curso'=> $curso);

}
	
//Cierre de la conexión
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
//Creación del JSON
$json_string = json_encode($usuarios);
echo $json_string;	

?>
</body>
</html>
