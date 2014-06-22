<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/agregar.css">
<link rel="stylesheet" type="text/css" href="css/tabmenu.css">
<script type="text/javascript" src="css/util.js"></script>
<meta charset=utf-8 />
<title>Editar Carrera</title>
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
            <p id="ubicado">Editar Carreras</p>
  <form action="EditarCarreraFinal.php" method="post"></form>
    <div class="Contenido">
     <?php
                $traer = $_POST['editid'];

                 $con=mysql_connect("localhost","admin","12345"); //conexion MySQl
    mysql_select_db("Proyecto",$con); //Seleccionar base datos
    $datos=mysql_query("select * from usuario where id='$traer'"); //enviar código MySQL
    //$prueba=mysql_result($datos, 0);
    //echo $prueba;
    if($datos == false){
    echo "No se encontro datos en la base de datos";
}
     //echo "<table border='1'><tr><td>Código</td><td>Nombre</td><td>Duración</td><td>Horario</td><td>Nivel de Titulo</td><td>Sedes</td></tr>";   
        while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
        echo "<tr>";
        $codigo = "<label>Codigo</label><br /><input type='texto' value=".$row['codigo']."><br /><br />";
        $nombre = "<label>Nombre</label><br /><input type='texto' value=".$row['nombre']."><br /><br />";
        $duracion = "<label>Duracion</label><br /><input type='texto' value=".$row['duracion']."><br /><br />";
        $horario = "<label>horario</label><br /><input type='texto' value=".$row['horario']."><br /><br />";
        $titulo = "<label>Nivel de Titulo</label><br /><input type='texto' value=".$row['titulo']."><br /><br />";
        $sede = "<label>sede</label><br /><input type='texto' value=".$row['sede']."><br /><br />";
            echo $codigo,$nombre,$duracion,$horario,$titulo,$sede;
      }
     // echo "</table";
mysql_close($con);//cerrar conexion

             ?>
    		

           <a href="" onclick="editarCarrera()"><input type="submit" id="editar" name="editar" value="Editar" target='_blank'></a>

           <a href="carrera.php"><input type="button" id="cancelar" name="cancelar" value="Cancelar" target='_blank'></a>
    </div>
</body>
</html>
