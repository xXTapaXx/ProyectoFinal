<html>
<meta charset="utf-8">
<?php
    require_once('funciones.php');
    conectar('localhost','admin','12345','Proyecto');

    $id= $_POST['id'];
    $usuario= $_POST['usuario'];
    $contrasenna= $_POST['contrasenna'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $direccion= $_POST['direccion'];
    $edit = $_POST['edit'];


    $insertar = @mysql_query("update usuario set id='$id', usuario='$usuario', contrasenna='$contrasenna', telefono ='$telefono',correo ='$correo',direccion='$direccion' where id='$edit'");
    header("Location:usuario.php");
   

?>
</html>