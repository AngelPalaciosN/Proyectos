<?php
include "./conexion.php";

$nombre = $_POST['nombre'];
$orden = $_POST['postre'];
$cantidad = $_POST['cantidad'];
$formap = $_POST['formap'];

$insertar = "INSERT INTO ordenes(nombre,orden,cantidad,forma_p) VALUES('$nombre','$orden','$cantidad', '$formap')";

        
$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {
    echo '<script>
    
        alert("Se insertaron los datos correctamente");
        location.href = "../index.php";
    
    </script>';
}else{
    echo "Problemas en la inserción";
}

mysqli_close($conexion);


?>