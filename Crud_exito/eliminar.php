<?php 

include "./php/conexion.php";

if(!empty($_POST)){
    $codm = $_POST['cod'];
    $q_elm = mysqli_query($conexion, "DELETE from usuarios WHERE id_usuario = '$codm'");
    if($q_elm){
     echo "<script> 
        alert('El usuario se a eliminado');
        location.href='./php/mostrar_usuario.php';
        </script>";
    }else{
        echo "<script> 
                alert('Error al eliminar el usuario');
                location.href='./php/mostrar_usuario.php';
                </script>";
    }

     }

$del = $_GET['del'];

$resul = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$del'") or die("Error al eliminar".mysqli_error($conexion));

while ($row = mysqli_fetch_array($resul)){

    $cod = $row['id_usuario'];
    $usuario = $row['usuario'];
    $pass = $row['pass'];
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Eliminar registro </title>
</head>
<body class="main3">

<form method="post" action="">
    <p>Esta seguro de que quiere eliminar al siguiente usuario!!!</p>
    <div class="dt">
    <?php echo "Id: ".$cod ?> 
    <br><br>
    <?php echo "Usuario: ".$usuario ?> 
    <br><br>
    <?php echo "Pass: ".$pass ?>
      </div>
    <br><br>
    <input type="hidden" name="cod" value="<?php echo $del; ?>">
    <input type="submit" value="Eliminar" style="color: red;" id="el">
    <input type="button" value="Cancelar" onclick="delx()" name="can">


</form>

<script src="./js/script.js"></script>
    
</body>
</html>