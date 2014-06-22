<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/agregar.css">
<link rel="stylesheet" type="text/css" href="css/tabmenu.css">
<script type="text/javascript" src="css/util.js"></script>
<meta charset=utf-8 />
<title>Editar Estudiante</title>
</head>
<body>
<div id="salir">
        <a id="salir" href="index.html"><img src="imagenes/exitHover.png"></a>
        <p id="salir"> Hola Admin</p>       
    </div>
    <div id="perfil">
                <img class="logo" src="imagenes/UTN.png">
            </div>
            <p id="perfil">Perfiles</p>
            <a id="dashboard" href="admin.html">Dashboard</a>
            <p id="dashboard"><strong>></strong></p>
            <p id="ubicado">Editar Estudiante</p>
 
    <div class="Contenido">
    <form action="editarEstudianteFinal.php" method="post">
     <?php
                $traer = $_POST['edit'];

                 $con=mysql_connect("localhost","admin","12345"); //conexion MySQl
    mysql_select_db("Proyecto",$con); //Seleccionar base datos
    $datos=mysql_query("select * from estudiante where cedula='$traer'"); //enviar código MySQL

    if($datos == false){
    echo "No se encontro datos en la base de datos";
}
     //echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>";   
        while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
        
        $cedula = "<label>ID</label><input type='texto' value=".$row['cedula']." name='cedula'><br /><br />";
        $nombre = "<label>nombre</label><input type='texto' value=".$row['nombre']." name='nombre'><br /><br />";
        $apellidos = "<label>Apellidos</label><input type='texto' value=".$row['apellidos']." name='apellidos'><br /><br />";
        $telefono = "<label>Telefono</label><input type='texto' value=".$row['telefono']." name='telefono'><br /><br />";
        $correo = "<label>Correo</label><input type='email' value=".$row['correo']." name='correo'><br /><br />";
        $direccion = "<label>Direccion</label><input type='texto' value=".$row['direccion']." name='direccion'><br /><br />";
        $carrera = "<label>Carrera</label><input type='texto' value=".$row['carrera']." placeholder='Carrera' name='carrera'><br /><br />";
        $ingles =  "<label>Ingles</label><input type='texto' value=".$row['ingles']." placeholder='Nivel de Ingles' name='ingles'><br /><br />";
        $skill =  "<label>Skill</label><input type='texto' value=".$row['skill']." placeholder='Calidades/Skills' name='skill'><br /><br />";
        $proyecto =  "<label>Proyecto</label><input type='texto' value=".$row['proyecto']." placeholder='Proyectos Desarrollados' name='proyecto'><br /><br />";
        $curso =  "<label>Curso</label><input type='texto' value=".$row['curso']." placeholder='Curso' name='curso'><br /><br />";
        $duracion = "<label>Duracion</label><input type='texto' value=".$row['duracion']." placeholder='Duracion' name='duracion'><br /><br />";
        $tecnologia =  "<label>Tecnologias</label><input type='texto' value=".$row['tecnologia']." placeholder='Tecnologias utilizadas' name='tecnologia'><br /><br />";
        $descripcion =  "<label>Descripcion</label><input type='texto' value=".$row['descripcion']." placeholder='Descripcion del proyecto' name='descripcion'><br /><br />";
        $fecha =  "<label>Fecha</label><input type='texto' value=".$row['fecha']." placeholder='fecha' name='fecha'><br /><br />";
        $calificacion =  "<label>Calificacion</label><input type='texto' value=".$row['calificacion']." placeholder='calificacion' name='calificacion'><br /><br />";
        $comentario =  "<label>Comentario</label><input type='texto' value=".$row['comentario']." placeholder='comentario de los Profes' name='comentario'><br /><br />";
        $foto =  "<label>Foto</label><input type='texto' value=".$row['foto']." placeholder='foto' ><br /><br />";
        $file =  "<label>File</label><input type='file' value=".$row['foto']." placeholder='foto' name='foto'><br /><br />";
        $traer = "<input type='hidden' value=".$row['cedula']." name='edit' required><br /><br />";

        echo $cedula,$nombre,$apellidos,$telefono,$correo,$direccion,$carrera,$ingles,$skill,$proyecto,$curso,$duracion,$tecnologia,$descripcion,$fecha,$calificacion,$comentario,$foto,$file,$traer;
      }
     // echo "</table";
mysql_close($con);//cerrar conexion
              
             ?>
    		

           <a href="" onclick="editarEstudiante()"><input type="submit" id="editar" name="editar" value="Editar" target='_blank'></a><br /><br />

           <a href="estudiante.php"><input type="button" id="cancelar" name="cancelar" value="Cancelar" target='_blank'></a><br /><br />
    </div>
    </form>
</body>
</html>