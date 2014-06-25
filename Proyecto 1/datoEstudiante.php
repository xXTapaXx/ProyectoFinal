<!DOCTYPE html>
<html>
<head>
<!-- Importamos nuestros CSS -->
    <link rel="stylesheet" href="css/reveal.css"> 
    <link rel="stylesheet" type="text/css" href="css/estudiante.css">
    
    <!-- Importamos los scripts necesarios -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="js/jquery.reveal.js"></script>
    <script type="text/javascript" src="js/util.js"></script>
    <script type="text/javascript" src="js/jquery.min"></script>
<meta charset=utf-8 />
<title>Editar Estudiante</title>
</head>
<body>
<div id="myModal" class="reveal-modal" style="width:46%; height:74%;">
    <div class="Contenido">
    <form action="editarEstudiante.php" method="post">
     <?php
                $traer = $_POST['verEstudiante'];
                 $con=mysql_connect("localhost","admin","12345"); //conexion MySQl
    mysql_select_db("Proyecto",$con); //Seleccionar base datos
    $datos=mysql_query("select * from estudiante where cedula='207220239'"); //enviar código MySQL

    if($datos == false){
    echo "No se encontro datos en la base de datos";
}
     //echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>";   
        while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
$imagen = "<img class='foto' src=".$row['foto']."><br /><br />";
        $cedula = "<div class='PositionEditar1'><label class='editar'>Cedula</label><input type='texto' value=".$row['cedula']." name='cedula'  class='PositionEditar1'><br /><br />";
        $nombre = "<label >nombre</label><input type='texto' value=".$row['nombre']." name='nombre' class='PositionEditar1' readonly><br /><br />";
        $apellidos = "<label >Apellidos</label><input type='texto' value=".$row['apellidos']." name='apellidos'  class='PositionEditar1' readonly><br /><br />";
        $telefono = "<label >Telefono</label><input type='texto' value=".$row['telefono']." name='telefono'  class='PositionEditar1' readonly><br /><br />";
        $correo = "<label >Correo</label><input type='email' value=".$row['correo']." name='correo'  class='PositionEditar1' readonly><br /><br />";
        $direccion = "<label >Direccion</label><input type='texto' value=".$row['direccion']." name='direccion'  class='PositionEditar1' readonly><br /><br />";
        $carrera = "<label >Carrera</label><input type='texto' value=".$row['carrera']." name='carrera'  class='PositionEditar1' readonly><br /><br />";
        $ingles =  "<label >Ingles</label><input type='texto' value=".$row['ingles']." name='ingles'  class='PositionEditar1' readonly><br /><br />";
        $skill =  "<label >Skill</label><input type='texto' value=".$row['skill']." name='skill'  class='PositionEditar1' readonly><br /><br />";
        $proyecto =  "</div><div class='PositionEditar2'><label >Proyecto</label><input type='texto' value=".$row['proyecto']." name='proyecto'  class='PositionEditar2' readonly><br /><br />";
        $curso =  "<label >Curso</label><input type='texto' value=".$row['curso']."  name='curso'  class='PositionEditar2' readonly><br /><br />";
        $duracion = "<label >Duracion</label><input type='texto' value=".$row['duracion']." name='duracion'  class='PositionEditar2' readonly><br /><br />";
        $tecnologia =  "<label >Tecnologias</label><input type='texto' value=".$row['tecnologia']." name='tecnologia'  class='PositionEditar2' readonly><br /><br />";
        $descripcion =  "<label >Descripcion</label><input type='texto' value=".$row['descripcion']." name='descripcion'  class='PositionEditar2' readonly><br /><br />";
        $fecha =  "<label >Fecha</label><input type='texto' value=".$row['fecha']." name='fecha'  class='PositionEditar2' readonly><br /><br />";
        $calificacion =  "<label >Calificacion</label><input type='texto' value=".$row['calificacion']." name='calificacion'  class='PositionEditar2' readonly><br /><br />";
        $comentario =  "<label >Comentario</label><input type='texto' value=".$row['comentario']." name='comentario'  class='PositionEditar2' readonly><br /><br />";
        $traer = "<input type='hidden' value=".$row['cedula']." name='edit' required><br /><br />";


        echo $imagen,$cedula,$nombre,$apellidos,$telefono,$correo,$direccion,$carrera,$ingles,$skill,$proyecto,$curso,$duracion,$tecnologia,$descripcion,$fecha,$calificacion,$comentario,$traer;
      }
     // echo "</table";
mysql_close($con);//cerrar conexion
              
             ?>
           <a href='buscar.php'><input type="button" id="cancelarDatosEstudiante" name="cancelarDatosEstudiante" value="Cancelar" target='_blank'></a><br /><br />
    </div>
    </form>
</div>    
</body>
</html>