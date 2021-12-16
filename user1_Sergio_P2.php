<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Acceso</title>
</head>

<body>

<?php
/*Iniciamos un php con el inicio de sesion*/ 
session_start();
/*Con el código de abajo hacemos que dependiendo de qué ponemos 
abra una página o abra otra*/
if (!empty($_POST['usuario'])){
    $_SESSION['usuario']=$_POST['usuario'];
        if ($_SESSION['usuario']=='Profesor'){
            header('location:user3_FcoJavier.php');
        }else if ($_SESSION['usuario']=='Administrador'){
            header('location:user4_Alejandro.php');
        }else{
            header('location:user2_Pablo.php');
        }
}
?>
    
    <form name="Acceder" method="post" action="">
        <h1>Formulario de acceso</h1>
        <p>Usuario: <input type="text" name="usuario"></p>     
       
        <p><input type="submit" value="Acceder"></p>
    </form>
    <form name="back" method="post" action="">
        <input type="submit" value="Atrás">
    </form>

</body>

</html>