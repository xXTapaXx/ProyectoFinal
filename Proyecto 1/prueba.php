
<?php  
    class conexion{
        function traerCarrera(){
$con=mysql_connect("localhost","admin","12345"); //conexion MySQl
mysql_select_db("Proyecto",$con); //Seleccionar base datos
$sql=" select * from carrera"; //código MySQL
$datos=mysql_query("select * from carrera"); //enviar código MySQL
//$prueba=mysql_result($datos, 0);
//echo $prueba;
if($datos == false){
    echo "No se encontro datos en la base de datos";
}
     //echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>";   
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
        echo "<tr>";
        $codigo = $row['codigo'];
        $nombre = $row['nombre'];
        $duracion = $row['duracion'];
        $horario = $row['horario'];
        $titulo = $row['titulo'];
        $sede = $row['sede'];
         $opciones = "<a href='javascript:editarCarrera(".$codigo.")'><img src='imagenes/edit.png'/></a>
        <a href='javascript:eliminarCarrera(".$codigo.")' ><img class='opciones' src='imagenes/delete.png' /></a>";
            echo "<td>$codigo</td><td>$nombre</td><td>$duracion</td><td>$horario</td><td>$titulo</td><td>$sede</td><td>$opciones</td></tr>";
      }
     // echo "</table";
mysql_close($con);//cerrar conexion
}
 
     function traerUsuario(){
$con=mysql_connect("localhost","admin","12345"); //conexion MySQl
mysql_select_db("Proyecto",$con); //Seleccionar base datos
$sql=" select * from carrera"; //código MySQL
$datos=mysql_query("select * from usuario"); //enviar código MySQL
//$prueba=mysql_result($datos, 0);
//echo $prueba;
if($datos == false){
    echo "No se encontro datos en la base de datos";
}
     //echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>";   
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
        echo "<tr>";
        $id = $row['id'];
        $usuario = $row['usuario'];
        $contrasenna = $row['contrasenna'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $direccion = $row['direccion'];
        $opciones = "<a href='javascript:editarUsuario(".$id.")'><img src='imagenes/edit.png'/></a>
        <a href='javascript:eliminarUsuario(".$id.")' ><img class='opciones' src='imagenes/delete.png' /></a>";
            echo "<td>$id</td><td>$usuario</td><td>$contrasenna</td><td>$telefono</td><td>$correo</td><td>$direccion</td><td>$opciones</td></tr>";
      }
     // echo "</table";
mysql_close($con);//cerrar conexion
}
     function traerEstudiante(){
$con=mysql_connect("localhost","admin","12345"); //conexion MySQl
mysql_select_db("Proyecto",$con); //Seleccionar base datos
$sql=" select * from carrera"; //código MySQL
$datos=mysql_query("select * from estudiante"); //enviar código MySQL
//$prueba=mysql_result($datos, 0);
//echo $prueba;
if($datos == false){
    echo "No se encontro datos en la base de datos";
}
     //echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>";   
while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
        echo "<tr>";
        $cedula = $row['cedula'];
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $direccion = $row['direccion'];       
        $opciones = "<a href='javascript:editarEstudiante(".$cedula.")'><img src='imagenes/edit.png'/></a>
        <a href='javascript:eliminarEstudiante(".$cedula.")' ><img class='opciones' src='imagenes/delete.png' /></a>";
            echo "<td>$cedula</td><td>$nombre</td><td>$apellidos</td><td>$telefono</td><td>$correo</td><td>$direccion</td><td>$opciones$input</td></tr>";
      }
     // echo "</table";
mysql_close($con);//cerrar conexion
}
}
?>