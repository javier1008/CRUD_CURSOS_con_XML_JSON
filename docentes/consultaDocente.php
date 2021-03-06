<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/estilo_alumno.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
    <div align="right">
      <form action="#" method="post">
          
            <input align="center" type="text" name="buscarid" class='input'placeholder="Ingresa el N??mero de Control" required maxlength="8" minlength="8">
            <button type="submit" name="submit" id="btnAceptar">
            Buscar
            </button>
        </form>
    </div>

    <?php
include("../conexion.php");
if (isset($_POST['submit'])) {
include("../conexion.php");
$num_Control= $_REQUEST['buscarid'];
$query="SELECT num_Control FROM docente WHERE num_Control='$num_Control';";
$conexion = $mysqli->query($query);

if($conexion->num_rows ==1)
{
   $result =mysqli_query($mysqli,"SELECT * FROM docente where num_Control='$num_Control'");
   while($row = mysqli_fetch_array($result))
   {
    echo"
    <div align='center'>
    <form action='#' method='post'> 
    <label>Nombre</label> <br>
    <input disabled class='input' type='text' placeholder='Nombre' name='nombre' value='{$row['nombre']}' required> <br> <br>
    <label>Apellido Paterno</label> <br>
    <input disabled class='input'type='text' placeholder='paterno' name='paterno' value='{$row['apell_Paterno']}' required> <br><br>
    <label>Apellido Materno</label> <br>
    <input disabled class='input'type='text' placeholder='Segundo Apellido' name='materno' value='{$row['apell_Materno']}' required> <br><br>
    <label>C??dula Profesional</label> <br>
    <input disabled class='input' type='text' placeholder='cedula' name='cedula' value='{$row['cedula']}' required> <br> <br> 
    <label>Curso</label> <br>
    <input disabled class='input' type='text' placeholder='curso' name='curso' value='{$row['Curso']}' required> <br> <br> 
       
    </form>
    </div>
    ";
}
}
else{
    echo '<script language="javascript">';
	echo 'alert("Docente No Encontrado");';
	echo '</script>'; 
}}
?>
</body>
</html>