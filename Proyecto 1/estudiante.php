<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/tabmenu.css">
<script type="text/javascript" src="js/util.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<meta charset=utf-8 />
<title>Estudiantes</title>

</head>
<body>
<div class="conteiner">

        <img class="logo" src="imagenes/UTN.png">
        <p id="perfil">Perfiles</p>

        <p id="salir"> Hola Admin</p> 
        <a id="salir" href="index.html"><img src="imagenes/exitHover.png"></a>
              

     
            <a id="dashboard" href="admin.html">Dashboard <strong> > Estudiante</strong></a>

    <div id="navbar">       
    <div id="holder">
    <ul>
    <li><a href="admin.html">Dashboard</a></li>
    <li><a href="carrera.php">Carreras</a></li> 
    <li><a href="estudiante.php" id="onlink">Estudiantes</a></li> 
    <li><a href="usuario.php">Usuarios</a></li>            
    </ul>
    
    </div><!--end holder div-->
    </div><!--end navbar div-->

    <div class="tabContent">

         <p>Listado de Carreras</p><hr />

         <a href="agregarEstudiante.html"><img class="agregar" src="imagenes/agregar.png"/></a>         
              
       
           
            <table border="1px">
            <thead>
                <tr>
                    <td>Foto</td>
                    <td>Cedula</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Carrera</td>
                    <td>Opciones</td>
                </tr>
                </thead>
                 <?php
                include("prueba.php");
                $con = new conexion();
                $con->traerEstudiante();
             ?>
            </table>   
            <form  action="eliminarEstudiante.php" method="post" id="formularioEstudiante">
               <input type="hidden" name="id" id="id">
           </form>
            <form  action="editarEstudiante.php" method="post" id="formularioEditarEstudiante">
               <input type="hidden" name="edit" id="edit">
           </form>


</div>    
</body>
</html>