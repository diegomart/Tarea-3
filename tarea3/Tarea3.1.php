<!DOCTYPE html>
<html>
  <title>Tarea 3</title>
  
<?php



    // obtiene los datos de entrada del formulario
    $Usuario = $_POST['txtUsuario'];
    $Pass = $_POST['txtPass'];
    // utiliza los datos de entrada del formulario
   
	
    if($Usuario == "Tacuache" and $Pass == "tacuache2087"){

	   echo "	 <head>

		<h2>Pagina principal</h2> 

 		 </head>


 		 <body>
 
	
			<h2>  Bienvenido </h2>

			<a href=Tarea3.0.php><h4>'Salir'</h4></a>";

	}else{
	

		echo"<head>

			<h2>Logeo erroneo</h2> 

 		 </head>


  		<body>
			 ";
	
	echo "<a href=Tarea3.0.php><h4>'Intente de nuevo'</h4></a>";


	echo "<h2>Error<br> 'El codigo o la contraseña son incorrectos' </ h2>";
	
	}
    ?>
	
	
	
</body>
</html
