<!DOCTYPE html>


<html>

<head>
    <meta charset="UTF-8">
    <title> Formulario Git </title>
</head>

<body>
    <?php
	session_start();
	echo "Nombre de usuario: " . $_SESSION['usuario'];
	?>

    <form name="formulario" method="get" action="">
        <h1>Formulario de registro de aulas.</h1>

        <form name="formulario" method="get" action="">

            <label><p> Nombre aula: <input type="text" name="NombreAula" maxlength="50"> </p> </label>
            <label><p> Capacidad: <input type="number" name="Capacidad" maxlength="50"> </p> </label>
            <label> <p> Planta: <input type="number" name="Planta" maxlength="50"> </p> </label>
            <label> <p> Descripción: <input type="text" name="Descripción" maxlength="100"> </p> </label>



            <input type="button" value="Aceptar">
            <!-- Cambio3: elbotón atrás ahora redirige a la pantalla principal -->
            <a href="user1_Sergio_P1.php"><input type="button" value="Atrás"></a>

        </form>


</body>

</html>