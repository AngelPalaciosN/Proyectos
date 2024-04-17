<?php

include "./php/conexion.php";

if(isset($_POST['ir'])){
    header('Location:../formulario-r.php');
}elseif(isset($_POST['enviar'])){

    $cor = $_POST['cor'];
    $con = $_POST['con'];

    session_start();
    error_reporting(0);
    $_SESSION['cor'] = $cor;
    $_SESSION['con'] = $con;


    $admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$cor' and pass= '$con' and tipo = 'admin'");
    $user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$cor' and pass= '$con' and tipo = 'User'");


    if(mysqli_num_rows($admin)> 0){

        $fila = mysqli_fetch_row($admin);
        $correo = $fila[3];
        $pass = $fila[4];
        $tipo = $fila[5];
        session_start();
        $_SESSION['cor'] = $correo;
        $_SESSION['con'] = $pass;
        $_SESSION['tipo'] = "admin";

        header('location:pagina_admin.php');
    }elseif(mysqli_num_rows($user)>0){

            $fila = mysqli_fetch_row($user);
            $correo = $fila[3];
            $pass = $fila[4];
            session_start();
            $_SESSION['nombre'] = $name;
            $_SESSION['correo'] = $correo;
            $_SESSION['tipo'] = "user";

            header('location:pagina_pr.php');

        }

    mysqli_close($conexion);

}else{
    echo "error al conectar";
}


?>

<h1>Error al iniciar sesion,contraseña o correo invalidos</h1>
<a href="./index.php">Volver</a>

