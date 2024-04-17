<?php

include("datos.php");

if(isset($_POST['sub'])){

    if (strlen($_POST['nom']) >= 1 && strlen($_POST['nom']) >= 1 && strlen($_POST['nom']) >= 1 && strlen($_POST['nom']) >= 1){
        $nom = trim($_POST['nom']);
        $cor = trim($_POST['cor']);
        $men = trim($_POST['men']);
        $con = "INSERT INTO datos(nombre, email, mensaje) VALUES ('$nom','$cor','$men')";
        $res = mysqli_query($conex,$con);

        if ($res){
            ?>
            <script src="./js/app2.js"></script>
            <?php

        }else{
            echo "<h1 style='color:red;'> Error</h1>";
            

        }

        function BuR($user,$emai,$mens,$conex){
            $sql = "SELECT * FROM datos WHERE email='$emai' AND mensaje='$mens' AND usuario='$user'";
            $rel = mysqli_query($conex,$sql);
        }

    }


}



?>