<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['cor'];
    $varsession2 =$_SESSION['con'];

    if($varsesion == null || $varsesion = '' || $varsession2 <> 'admin' && $varsesion <> "admin@gmail.com"){
                
        ?>
        <h1>No tiene permiso de ingresa,usted no es un usuario admin</h1>
        <a href="../index.php">Volver</a>
<?php
        die();
    }
    


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar medicamento</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body >
    <?php include "../php/header.php"; ?>

    <?php
        include "conexion.php";
    ?>

    
<div class="main2">
<div class="container_table">
        <div class="table_elements">
            <br>
            <h1 class="med1"> Mostrar usuarios</h1>
            <br>
    <table>
        <tr>
            <th>Id usuarios</th>
            <th> Usuario</th>
            <th> Correo</th>
            <th> Contraseña</th>
            <th> Tipo</th>
            <th colspan="2"> Botones de acción</th>
        </tr>

        <tbody>
            <?php

                $registro = mysqli_query($conexion, "SELECT * FROM usuarios") or die("Problemas en el select".mysqli_error($conexion));

                while($row = mysqli_fetch_array($registro)){ ?>


                    <tr>
                        <td><?php echo $row['id_usuario']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>


                        <td>
                            <a href="../actualizar.php?edit=<?php echo $row['id_usuario']; ?>"><button class="btn">
                            <span class="material-symbols-outlined">
                                upgrade
                            </span><p>Actualizar</p>
                            </button>

                            </a>
                        </td>

                        <td>
                            <a href="../eliminar.php?del=<?php echo $row['id_usuario']; ?>"><button class="btn">
                            <span class="material-symbols-outlined">
                                delete
                            </span><p>Eliminar</p>
                                </button>
                            </a>
                        </td>
                    </tr>
            <?php


                 }   
?>
            
        </tbody>
    </table>
    <div class="vol">
    <a onclick="re()" ?><button class="btn">
    <span class="material-symbols-outlined">
        arrow_back
</span><p class="mv">Volver</p>
                            </button>

                            </a>
        </div>
        </div>
</div>
</div>

<script src="../js/script.js"></script>
 <?php include "../php/footer.php"; ?>
</body>
</html>