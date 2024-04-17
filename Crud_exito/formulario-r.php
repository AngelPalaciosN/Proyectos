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
    <?php include './php/header.php'  ?>
    <script src="./js/app1.js"></script>
    <title>Iniciar session</title>
</head>
<body>
    <main id="ma2">
        <form action="./php/registar.php" method="post">
            <h2>Registarse</h2>
            <input type="text" placeholder="Ingrese su usuario" name= "usuario">
            <br>
            <input type="email" placeholder="Ingrese su correo" name="cor" required>
            <br>
            <input type="password" placeholder="Contraseña" name="con" required>
            <input type="hidden" name="tipo">
            <input class="sub" type="submit" value="Enviar">
            <br>
            <p class="t">Tienes cuenta!, inicia session</p>
            <button class="lo" onclick="bc()" >Iniciar sesion</button>
        </form>
    </main>
    <br><br><br>  
    <?php include './php/footer.php'  ?>    
    <script defer src="./js/script.js"></script>
    
</body>
</html>