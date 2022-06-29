<?php 
    require 'src/forms/nota_final.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario_1_style.css">
    <title>FORMULARIO 1</title>
</head>
<body>
<div id="container">
    <h1 id="title">Formulario 1</h1>
    <p class="description">Realizar la codificación necesaria para calcular la nota final de una materia teniendo en cuenta la siguiente ponderación:</p>
    <p class="description">
        35% del promedio de  los 3 parciales. <br>
        35% de la calificación del examen final. <br>
        30% de la calificación de un trabajo final. <br>
    </p>
    <p class="description"> La materia se aprueba con una nota promedio mínimo de 3, debe mostrar la nota final y el mensaje de “Aprobó” o “No aprobó” de acuerdo al resultado.</p>
    <form method="POST">
        <div>
            <label class="labels" for="nota1">Parcial 1:</label>
            <input class="input-field" type="number" id="nota1" name="nota1" required>
        </div>
        <div>
            <label class="labels" for="nota2">Parcial 2:</label>
            <input class="input-field" type="number" id="nota2" name="nota2" required>
        </div>
        <div>
            <label class="labels" for="nota3">Parcial 3:</label>
            <input class="input-field" type="number" id="nota3" name="nota3" required>
        </div>
        <div>
            <label class="labels" for="nota4">Examen final:</label>
            <input class="input-field" type="number" id="nota4" name="nota4" required>
        </div>
        <div>
            <label class="labels" for="nota5">Trabajo final:</label>
            <input class="input-field" type="number" id="nota5" name="nota5" required>
        </div>
        <p id="salidas">
            <?php 
            if (isset($_POST['submit'])) {
                if ($notaFinal >= 3) {
                    echo "Aprobó con una nota de: ".$notaFinal;
                } else {
                    echo "Desaprobó con una nota de: ".$notaFinal;
                }
            }
            ?>
        </p>
        <button type="submit" id="boton-enviar" name="submit">Calcular Nota</button>
    </form>
</div>
</body>
</html>