<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['cor'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        die();
    }

?>

<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" src="img/short-ico.svg"/>
    <link rel="stylesheet" href="css/style.css">
    <title> Página usuarios</title>
</head>
<body>
<?php include './php/header.php' ?>
<div class="container">
    <h2>BIENVENIDO <?php echo $_SESSION['cor']; ?></h2>
    <h3><br><a href="./php/cerrar.php">CERRAR SESIÓN</a></h3>
    </div>
</body>
</html>