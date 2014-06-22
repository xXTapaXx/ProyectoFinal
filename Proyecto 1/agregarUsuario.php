<html>
<meta charset="utf-8">
<?php

	require_once('funciones.php');
	conectar('localhost','admin','12345','Proyecto');

	$id =  $_POST['id'];
	$usuario =  $_POST['usuario'];
	$contrasenna =  $_POST['contrasenna'];
	$telefono =  $_POST['telefono'];
	$correo =  $_POST['correo'];
	$direccion =  $_POST['direccion'];

	

	$query = @mysql_query("select * from usuario where usuario='$usuario'");
	if($existe = @mysql_fetch_object($query)){
		echo 'El usuario'.$usuario.'ya existe.';
	}else{
		
	$insertar = @mysql_query("insert into usuario (id,usuario,contrasenna,telefono,correo,direccion) values( '$id','$usuario','$contrasenna','$telefono','$correo','$direccion')");
	header("Location:usuario.php");
}

?>
</html>