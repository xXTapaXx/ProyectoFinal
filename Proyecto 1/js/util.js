//Agregar, Editar y Eliminar Carrera
 function editarCarrera(id){
 	        $("#edit").val(id);
         $('#formularioEditarCarrera').submit(); 
 }

function eliminarCarrera(id){
    var r=confirm("¿Esta Seguro que desea eliminar esta Carrera?");

    if(r==true){

        $("#id").val(id);
        $('#formularioCarrera').submit();
    }
    else{
      header("Location: carrera.php "); 
    }
  }

//Agregar, Editar y Eliminar Estudiante 
function agregarEstudiante(){
 	$('#formularioAgregarEstudiante').submit();
 } 

 function editarEstudiante(id){
 	 $("#edit").val(id);
         $('#formularioEditarEstudiante').submit();
 }

function eliminarEstudiante(cedula){
   
    var r=confirm("¿Esta Seguro que desea eliminar este Estudiante?");

    if(r==true){
        
         $("#id").val(cedula);
         $('#formularioEstudiante').submit();
    }
    else{
      header("Location: estudiante.php"); 
    }
  }


  function verEstudiante(cedula){
     var r=confirm("¿Esta Seguro que desea eliminar este Estudiante?");

    if(r==true){
         $("#estudiante").val(cedula);
         $('#verEstudiante').submit();
    }
    else{
      header("Location: estudiante.php"); 
    }
  }

//Agregar, Editar y Eliminar Usuario
 function editarUsuario(id){

 
         $("#editid").val(id);
         $('#formularioEditarUsuario').submit();
    
 }

function eliminarUsuario(id){
    var r=confirm("¿Esta Seguro que desea eliminar este Usuario?");

    if(r==true){
        $("#id").val(id);
         $('#formularioUsuario').submit();
    }
    else{
      header("Location: usuario.php"); 
    }
  }

  function login(){
      $('#formularioLogin').submit();
  }

  function buscar(){
     $('#formularioBuscar').submit();
  }

 











