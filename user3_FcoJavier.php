<!DOCTYPE html>


<html>
	
	<head>
		<meta charset="UTF-8">
		<title> Formulario de registro - Mi web </title>
	</head>

	<body>
	<?php
		/*Para que aparezca el nombre del usuario registrado*/ 
		session_start();
		echo "Nombre de usuario: " . $_SESSION['usuario'];
		?>
	
	<form name="formulario" method="get" action="">
		<h1>Formulario de registro de cursos</h1>
		
		<form name="formulario" method="get" action="">
		
			<label> <p> Código de curso: <input type="number" name="Nombre" maxlength="50"> </p> </label> 
			
			<label> <p> Nombre del curso: <input type="text" name="Apellidos" maxlength="50"> </p> </label>
			
			<?php
			/*Array con los tipos de clases  */
			$clases = array('Presencial', 'Semipresencial', 'A distancia');
			foreach($clases as $value){
				/*Cada valor del array generará un botón tipo radio */
			echo '<input type=radio name=clases value=nombre>' . $value;
			}
			?>
			
			
			<input type="submit">
		
			<a href="user1_Sergio_P1.php"><input type="button" value="Atras"></a>

		</form>
			<!-- Enlace para que nos dirija al  registro de aulas-->
	<a href="user4_Alejandro.php">Formulario de registro de aulas.</a>

	</body>
</html>