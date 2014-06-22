<html>
<meta charset="utf-8">
<?php
	
	require_once('funciones.php');
	conectar('localhost','admin','12345','Proyecto');

	$codigo =  $_POST['id'];

	
	

	$query = @mysql_query("delete from carrera where codigo='$codigo'");
	header("Location:estudiante.php");


?>
</html>