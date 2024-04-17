<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/estilo.css">
    <title>Ordena</title>

</head>
<body>
<?php include "./php/header.php"; ?>
<div class="volb">
            <button onclick="vol()"><a href="./index.php"><span class="material-symbols-outlined">
                arrow_back
            </span></a></button>
            </div>
<section class="sec3" id="sec3">

            <form id="formulario" action="./php/enviard.php" method="post">
                <h1> Ordena ahora:</h1>
                <label> Postre</label>
                <br><br>
                <select id="postre" name="postre" required>
                <option disabled selected value>Seleccione su pedido--</option>
			  <option value="1">Pastel de fresa</option>
			  <option value="2">Pan</option>
			  <option value="3">Cupcake</option>
			  <option value="4">Helado</option>
		    </select>

            <label> A nombre de: </label>
                <input type="text" id="cantidad2" name="nombre" required>

                <label> Cantidad: </label>
                <input type="number" id="cantidad2" name="cantidad" required>

                <label> Forma de pago: </label>
                <select id="formadepago2" required name="formap">
                <option disabled selected value>Seleccione un metodo de pago--</option>
			  <option value="Efectivo">Efectivo </option>
			  <option value="Tarjeta">Tarjeta </option>
			  <option value="Bono">Bono </option>
			  <option value="Criptomonedas">Criptomonedas </option>
              <option value="Cupon">Cupon </option>
              <option value="Trueque">Truque </option>
              <option value="Civica">Civica</option>
		    </select>
                <button type="submit" class="b1" id="calc" onclick="cal();">Ordenar</button>
            </form>
        </div>
        </section>

</body>
</html>