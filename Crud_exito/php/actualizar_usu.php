<?php 

    include "./conexion.php";

    $consulta = ("UPDATE `usuarios` SET `id_usuario`='$_POST[idu]', `usuario`='$_POST[usuario]',`correo`='$_POST[cor]',`pass`='$_POST[con]',`tipo`='$_POST[tipo]' WHERE `id_usuario`='$_POST[idu]'");

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo "<script>
        
            alert('El usuario se actualizó correctamente');

            location.href='./mostrar_usuario.php';

        </script>";
    }

    mysqli_close($conexion);
?>