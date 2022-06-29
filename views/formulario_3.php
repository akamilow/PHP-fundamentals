<?php 
    require '../src/forms/calcular_imc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario_3_style.css">
    <title>FORMULARIO 3</title>
</head>
<body>
<div id="container">
    <h1 id="title">Formulario 3</h1>
    <p class="description">
    Realizar la codificación necesaria para que se calcule y muestre el índice de masa corporal
    junto con la categoría en la cual se encuentra el individuo.
    </p>
    <p class="description">
    El índice de masa corporal (IMC) es una medida de asociación entre el peso y la talla
    de un individuo. Ideado por el estadístico belga Adolphe Quetelet, por lo que también se
    conoce como índice de Quetelet, se calcula según la expresión matemática:
    </p>
    <form method="POST">
        <div>
            <label class="labels" for="nombre">Nombre del paciente:</label>
            <input class="input-field" type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label class="labels" for="peso">Peso (kg):</label>
            <input class="input-field" type="number" id="peso" name="peso" placeholder="Ejemplo: 55" required>
        </div>
        <div>
            <label class="labels" for="altura">Altura (cm):</label>
            <input class="input-field" type="number" step="any" id="altura" name="altura" placeholder="Ejemplo: 1.72" required>
        </div>
        <p id="salidas">
            <?php 
                if (isset($_POST['submit'])) {
                    if ($imc < 18) {
                        echo $nombre." tu IMC: ".$imc." es Por debajo del peso";
                    }
                    if ($imc > 18 && $imc < 24) {
                        echo $nombre." tu IMC: ".$imc." es Saludable";
                    }
                    if ($imc > 25 && $imc < 30) {
                        echo $nombre." tu IMC: ".$imc." es Con sobrepeso";
                    }
                    if ($imc > 30 && $imc < 40) {
                        echo $nombre." tu IMC: ".$imc." es Obeso";
                    }
                    if ($imc > 40) {
                        echo $nombre." tu IMC: ".$imc." es Obesidad mórbida";
                    }
                }
            ?>
        </p>
        <button type="submit" id="boton-enviar" name="submit">Calcular IMC</button>
    </form>
</div>
</body>
</html>