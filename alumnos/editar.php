<?php
    include("../conexion.php");
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo_alumno.css">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="../js/formulario_jquery.js"></script>
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
    <hr> 
<form action="update.php" method="POST" id="basic-form">
    <div class="container" align="center">
        <?php
          $servidor="localhost";
          $usuario="root";
          $contra="";
          $db="cursos";
          $conexion=mysqli_connect($servidor,$usuario,$contra,$db);
          $consulta ="SELECT * FROM alumno WHERE num_Control='$id'";
          $resul=mysqli_query($conexion,$consulta);
          if($resul){
            
            while($sustraer = mysqli_fetch_array($resul)){
            echo"<input type='hidden' name='id' class='input' value='{$sustraer['num_Control']}' required><br>";
            echo "<label>Nombre</label><br>";  
            echo"<input type='text' placeholder='Nombre' name='nombre' class='input' value='{$sustraer['nombre']}' required><br>";//con el row va jalando los datos de la BD
            echo "<label>Apellido Paterno</label><br>";
            echo"<input type='text' placeholder='Nombre' name='apell_Paterno' class='input' value='{$sustraer['apell_Paterno']}' required><br>";
            echo "<label>Apellido Materno</label><br>";
            echo"<input type='text' placeholder='Nombre' name='apell_Materno' class='input' value='{$sustraer['apell_Materno']}' required><br>";
            echo "<label>Carrera</label><br>";
            echo"<input type='text' placeholder='Nombre' name='carrera' class='input' value='{$sustraer['carrera']}' required><br>";
            echo "<label>Semestre</label><br>";
            echo"<input type='text' placeholder='Nombre' name='semestre' class='input' value='{$sustraer['semestre']}' required><br>";
            echo "<label>Grupo</label><br>";
            echo"<input type='text' placeholder='Nombre' name='grupo' class='input' value='{$sustraer['grupo']}' required><br>";
            echo "<label>Curso</label><br>";
            echo"<input type='text' placeholder='Nombre' name='curso' class='input' value='{$sustraer['curso']}' required><br><br>";
            echo"<button type='submit' class='signupbtn' id='btnAceptar'>Actualizar</button>";
            echo"</div>";
            }
          }
          else{
            echo '<script >alert("No conecta");</script>';
          }
        
        ?>

    </div>
</form> 
</body>
</html>