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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="../js/formulario_jquery.js"></script>
<header class="header">
    <nav class="navegacion">
			<ul class="menu">
      <li class="nav-menu-item"><a href="../home.php" class="nav-menu-link nav-link"><strong>INICIO</strong></a></li>    
            <li class="nav-menu-item"><a href="#"class="nav-menu-link nav-link">ALUMNOS</a>
                <ul class="submenu">
						<li class="li_class"><a href="#">Registro</a></li>
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
                <li class="nav-menu-item"><a href="../index.html" class="nav-menu-link nav-link"><strong>SALIR</strong></a></li>
			</ul>
		</nav>
</header>
    <div align="center">
      <form action="registrar.php" method="post" id="basic-form">
        <h1>Registro de Alumnos</h1>
        <br> 
        <label >Número de Control</label><br>
        <input type="text" name="num_Control" class="input" required maxlength="8" minlength="8"><br>
        <label>Nombre(s)</label><br>
        <input type="text" name="nombre" class="input" required><br>
        <label>Apellido Paterno</label><br>
        <input type="text" name="apell_Paterno" class="input" required><br>
        <label>Apellido Materno</label><br>
        <input type="text"  name="apell_Materno"required class="input"><br>
        <select id="curso" class="form__input select" name="carrera" required>
          <option class="opciones" disabled selected>Carrera</option>
          <option class="opciones" value="Informatica">Informática</option>
          <option class="opciones" value="TICS">TIC'S</option>     
        </select><br>
        <select id="semestre" class="form__input select" name="semestre" required>
          <option class="opciones" disabled selected>Semestre</option>
          <option class="opciones" value="Primero">Primero</option>
          <option class="opciones" value="Segundo">Segundo</option>
          <option class="opciones" value="Tercero">Tercero</option>
          <option class="opciones" value="Cuarto">Cuarto</option>
          <option class="opciones" value="Quinto">Quinto</option>
          <option class="opciones" value="Sexto">Sexto</option>
          <option class="opciones" value="Septimo">Septimo</option>
          <option class="opciones" value="Octavo">Octavo</option>        
        </select>
        <select id="grupo" class="form__input select" name="grupo" required>
          <option class="opciones" disabled selected>Grupo</option>
          <option class="opciones" value='A'>A</option>
          <option class="opciones" value="B">B</option>
          <option class="opciones" value="C">C</option>
          <option class="opciones" value="D">D</option>      
        </select><br>
        <select id="curso" class="form__input select" name="curso"required>
          <option class="opciones" disabled selected>Curso</option>
          <option class="opciones" value="HTML 5">HTML 5</option>
          <option class="opciones" value="CSS">CSS</option>
          <option class="opciones" value="JavaScript">JavaScript</option>      
        </select><br> <br>
        <button type="submit" id="btnAceptar">
            Registrar
        </button>
        <BUtton type="reset" id="btnCancelar">
            Cancelar
        </BUtton>
      </form>
    </div>
</body>
</html>