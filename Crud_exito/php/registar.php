<?php

    include "./conexion.php";

    $usuario = $_POST['usuario'];
    $cor = $_POST['cor'];
    $con = $_POST['con'];
    $tipo = 'user';

    $insertar = "INSERT INTO usuarios(usuario,correo,pass,tipo) VALUES('$usuario','$cor','$con', '$tipo')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$cor'");

    if(mysqli_num_rows($verificar_usuario)> 0){
        echo '<script>
        
            alert "El usuario ya está registrado 😎";
            window.history.go(-1);

        </script>';
        exit();
    }

    $resultado = mysqli_query($conexion,$insertar);

    if($resultado){
        echo '<script>
            alert("Datos insertados correctamente");
            location.href = "../formulario-l.php";
        </script>';

    }
    else{
        echo '<script>
            alert("Error al insertar datos,es posible que ya este registrado");
            location.href = "../formulario-l.php";
        </script>';
    }


    mysqli_close($conexion);

?>