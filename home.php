<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="estilos/estilo_home.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <header class="header">
    <nav class="navegacion">
			<ul class="menu">
            <li class="nav-menu-item"><a href="home.php" class="nav-menu-link nav-link"><strong>INICIO</strong></a></li>    
            <li class="nav-menu-item"><a href="#"class="nav-menu-link nav-link">ALUMNOS</a>
                <ul class="submenu">
						<li class="li_class"><a href="alumnos/alumno_agregar.php">Registro</a></li>
						<li class=""><a href="alumnos/updateAlumno.php">Gestionar</a></li>
                        <li class=""><a href="alumnos/alumno_consultar.php">Consulta</a></li>
                        <li class=""><a href="alumnos/xmlAlumno.php">XML</a></li>
                        <li class=""><a href="alumnos/Json_Alumno.php">JSON</a></li>
                        <!--<ul class="submenu">
                            <li><a href="#">otro</a></li>
                        </ul>-->
					</ul>
                </li>
				<li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">DOCENTES</a>
                <ul class="submenu">
						<li><a href="docentes/docente_agregar.php" >Registro</a></li>
						<li><a href="docentes/updateDocente.php">Gestionar</a></li>						
                        <li><a href="docentes/consultaDocente.php">Consulta</a></li>
                        <li><a href="docentes/xmlDocente.php">XML</a></li>
                        <li><a href="docentes/jsonDocente.php">JSON</a></li>
                    <!--<ul class="submenu">
                            <li><a href="#">otro</a></li>
                        </ul>-->
					</ul>
                </li>
				<li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">CURSOS</a>
					<ul class="submenu">
						<li><a href="cursos/consultaHtml5.php">HTML5</a></li>
						<li><a href="cursos/consultaCSS.php">CSS</a></li>
						<li><a href="cursos/consultaJavascript.php">JavaScript</a></li>
					</ul>
				</li> 
                <li class="nav-menu-item"><a href="index.html" class="nav-menu-link nav-link">Salir</a></li>
				
			</ul>
		</nav>
    </header>
    <div class="componerSalto"></div>

    <div class="padre">
    <div class="hijo">
        <h1>Desarrollo web</h1>
        <p> <i> En la actualidad el desarrollo y creación de sitios web se impone 
            en el mundo como herramienta tecnológica para unir las regiones, 
            crear negocios, soportar empresas, mostrarse en el mercado e 
            infinidad de aplicaciones de acuerdo a las perspectivas de las 
            personas y sus alcances, encontrando en la internet fuente vital 
            de generación de empleos, negocios eficaces e inteligentes y gran
            ayuda en la consecución de objetivos y planteamientos.</p>
            <br>
        <img src="images/home3.png" alt="" class="img1">
    </div>
</div>
</body>
</html>
