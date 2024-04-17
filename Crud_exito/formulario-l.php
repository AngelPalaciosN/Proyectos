<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="./img/Shortc.png"/>
    <link rel="shortcut icon" type="image/png" href="./img/Shortc.png"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include './php/header.php'  ?>
    <title>Iniciar session</title>
</head>
<body>
    <main id="ma2">
        <form action="./validacion.php" method="post">
            <h2>Ingresar</h2>
            <span class="material-symbols-outlined" id="acon">
            account_circle
            </span>
            <br>
            <input type="email" placeholder="Ingrese su correo" name="cor" required>
            <br>
            <input type="password" placeholder="Contraseña" name="con" required>
            <input type="submit" value="Enviar" name="enviar">
            <br>
            <p class="t">No tienes cuenta?, crea una gratis</p>
            <button class="lo" onclick="loc()" >Crear cuenta ahora</button>
        </form>
    </main>
    <br><br><br>  
    <?php include './php/footer.php'  ?>    
    <script defer src="./js/script.js"></script>
    
</body>
</html>