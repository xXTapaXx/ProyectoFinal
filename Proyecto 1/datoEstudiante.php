<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/tabmenu.css">
<link rel="stylesheet" type="text/css" href="css/estudiante.css">
<script type="text/javascript" src="css/util.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<meta charset=utf-8 />
<title>Estudiantes</title>

</head>
<body>
        <a id="salir" href="index.html"><img src="imagenes/exitHover.png"></a>
        <p id="salir"> Hola Admin</p>       


                <img class="logo" src="imagenes/UTN.png">

            <p id="perfil">Perfiles</p>
            <a id="dashboard" href="admin.html">Dashboard</a>
            <p id="dashboard"><strong>></strong></p>
            <p id="ubicado">Estudiantes</p> 

    <div class="tabContent">
    <div id="foto">
              prueba
          </div>   
    <form action="datoEstudiante.php" method="post" name="foto" enctype="multipart/form-data">
        <input type="file" name="ejemplo">
        <input type="submit" name="btnGuardar" value="Guardar">
    </form>  
          
          <input type="textp" value="" placeholder="Nombre" name="nombre">
          <input type="textp" value="" placeholder="Cedula" name="cedula">
          <input type="textp" value="" placeholder="Carrera" name="carrera">
          <input type="textp" value="" placeholder="Niver de Ingles" name="ingles">
          <input type="textp" value="" placeholder="Calidades/Skills" name="skill">
          <input type="textp" value="" placeholder="Proyectos Desarrollados" name="proyecto">
          <input type="textp" value="" placeholder="Curso" name="curso">
          <input type="textp" value="" placeholder="Duracion" name="duracion" >
          <input type="textp" value="" placeholder="Tecnologias utilizadas" name="tecnologia">
          <input type="textp" value="" placeholder="Descripcion del proyecto" name="descripcion">
          <input type="textp" value="" placeholder="fecha" name="fecha">
          <input type="textp" value="" placeholder="calificacion" name="calificacion">
          <input type="textp" value="" placeholder="comentario de los Profes" name="comentario">
    </div>

</body>
</html>

<?php
    require_once('funciones.php');
    conectar('localhost','admin','12345','Proyecto');

    if(isset($_POST['btnGuardar'])){
        $archivo = $_FILES['ejemplo']['tmp_name'];
        $destino = "imagenes/".$_FILES['ejemplo']['name'];

        $insertar = @mysql_query("insert into imagen (nombre) values( '$destino')");

        move_uploaded_file($archivo, $destino);
    }
?>