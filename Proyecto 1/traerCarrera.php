<?php
	function recuperarDatos(){
		require_once('funciones.php');
		conectar('localhost','admin','12345','ProyectoWeb');

		$query = "select * from carrera";
		$resultado = mysql_query($query);

		echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>"
		while($fila =mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td".$fila['codigo'];
			echo "<td".$fila['nombre'];
			echo "<td".$fila['duracion'];
			echo "<td".$fila['horario'];
			echo "<td".$fila['titulo'];
			echo "<td".$fila['sede'];
			echo "</tr>";
		}

		echo "</table";
	}
?>