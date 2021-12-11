<?php
$query = "SELECT * FROM docente";
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
    <title>XML Docente</title>
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
						<li><a href="../cursos/consultaCSS.php">CSS</a></li>
						<li><a href="../cursos/consultaJavascript.php">JavaScript</a></li>
					</ul>
				</li>
                <li class="nav-menu-item"><a href="../index.html" class="nav-menu-link nav-link">SALIR</a></li>
			</ul>
		</nav>
</header>
    <br>
    <?php
    echo "<h2 id='tituloxml'>Datos de Docentes en Formato XML</h2>";

    $query = "SELECT * FROM docente";
    $resultado = filtro($query);
    $cadena= mysql_XML($resultado);
    
    function mysql_XML($datos){
        $contenido = '&lt; informacion &gt;<br>';

        while ($row = mysqli_fetch_array($datos)) {
            $contenido.="&nbsp &lt;docente&gt;<br>";
            $contenido.="&nbsp &nbsp &lt;control&gt;".$row['num_Control']."&lt;/control&gt; <br>";
            $contenido.="&nbsp &nbsp &lt;nombre&gt;".$row['nombre']."&lt;/nombre&gt;<br>";
            $contenido.="&nbsp &nbsp &lt;primerApellido&gt;".$row['apell_Paterno'] ."&lt;/primerApellido&gt;<br>";
            $contenido.="&nbsp &nbsp &lt;segundoApellido&gt;".$row['apell_Materno']."&lt;/segundoApellido&gt;<br>";
            $contenido.="&nbsp &nbsp &lt;cedula&gt;".$row['cedula']."&lt;/cedula&gt;<br>";
            $contenido.="&nbsp &nbsp &lt;Curso&gt;".$row['Curso']."&lt;/Curso&gt;<br>";
            $contenido.="&nbsp &lt;/docente&gt;<br>";		
        }
        $contenido.='&lt; /informacion &gt;';

        echo $contenido;	
        return $contenido;
    }

    ?>
</body>
</html>
