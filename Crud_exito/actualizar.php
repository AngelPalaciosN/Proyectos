<?php

    include "./php/conexion.php";

    $edit = $_GET['edit'];

    //echo $edit;

    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$edit'") or die("Problemas en el Select".mysqli_error($conexion));

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar info</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include "./php/header.php"  ?>

    <form action="./php/actualizar_usu.php" method="post" class="act">

        <?php

            while ($row = mysqli_fetch_assoc($resultado)) {  ?>
            
            <div class="grupo">
                <input type="hidden" name="idu" value="<?php echo $row['id_usuario']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Usuario</label>
                <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Correo</label>
                <input type="text" name="cor" value="<?php echo $row['correo']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Contraseña</label>
                <input type="text" name="con" value="<?php echo $row['pass']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Tipo</label><br>
                <input type="text" name="tipo" value="<?php echo $row['tipo']; ?>">
                </div>
                <br> <br>
                <div class="grupo">
                    <div class="subgrupo">

                     <input class="btn btn-conf" type="submit" value="Actualizar">
                     <a href=""></a>
                     <input class="btn btn-conf" type="button" value="Cancelar">
                    </div>
                </div>


        <?php
            }

        ?>

    </form>
    <?php include "./php/footer.php" ?>
</body>
</html>