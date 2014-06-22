<html>
<meta charset="utf-8">
<?php
    require_once('funciones.php');
    conectar('localhost','admin','12345','Proyecto');

    $cedula =  $_POST['cedula'];
    $nombre =  $_POST['nombre'];
    $apellidos =  $_POST['apellidos'];
    $telefono =  $_POST['telefono'];
    $correo =  $_POST['correo'];
    $direccion =  $_POST['direccion'];
    $edit = $_POST['edit'];


    $insertar = @mysql_query("update estudiante set cedula='$cedula', nombre='$nombre', apellidos='$apellidos', telefono ='$telefono',correo ='$correo',direccion='$direccion' where cedula='$edit'");
    header("Location:estudiante.php");
   

?>
</html>