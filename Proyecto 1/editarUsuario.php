<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/agregar.css">
<link rel="stylesheet" type="text/css" href="css/tabmenu.css">
<script type="text/javascript" src="css/util.js"></script>
<meta charset=utf-8 />
<title>Editar Usuario</title>
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
            <p id="ubicado">Editar Usuario</p>
 
    <div class="Contenido">
    <form action="editarUsuarioFinal.php" method="post">
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
        $id = "<label>ID</label><br /><input type='texto' value=".$row['id']." name='id'><br /><br />";
        $usuario = "<label>Usuario</label><br /><input type='texto' value=".$row['usuario']." name='usuario'><br /><br />";
        $contrasenna = "<label>Contraseña</label><br /><input type='texto' value=".$row['contrasenna']." name='contrasenna'><br /><br />";
        $telefono = "<label>Telefono</label><br /><input type='texto' value=".$row['telefono']." name='telefono'><br /><br />";
        $correo = "<label>Correo</label><br /><input type='texto' value=".$row['correo']." name='correo'><br /><br />";
        $direccion = "<label>Direccion</label><br /><input type='texto' value=".$row['direccion']." name='direccion'><br /><br />";
        $traer = "<input type='hidden' value=".$row['id']." name='edit'><br /><br />";
            echo $id,$usuario,$contrasenna,$telefono,$correo,$direccion,$traer;
      }
     // echo "</table";
mysql_close($con);//cerrar conexion

             ?>
    		

           <a href="" onclick="editarUsuario()"><input type="submit" id="editar" name="editar" value="Editar" target='_blank'></a>

           <a href="usuario.php"><input type="button" id="cancelar" name="cancelar" value="Cancelar" target='_blank'></a>
    </div>
    </form>
</body>
</html>