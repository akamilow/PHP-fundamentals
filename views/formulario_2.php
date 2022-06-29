<?php 
    require '../src/forms/calcular_salario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario_2_style.css">
    <title>FORMULARIO 2</title>
</head>
<body>
<div id="container">
    <h1 id="title">Formulario 2</h1>
    <p class="description">
    Realizar la codificación necesaria para dar solución al siguiente requerimiento:
    </p>
    <p class="description">
    Una compañía de venta de automóviles paga a su personal de ventas un salario básico
    de $737.000 mensuales más una comisión de $50.000 por cada automóvil vendido más
    el 5% del valor de la venta.
    </p>
    <form method="POST">
        <div>
            <label class="labels" for="nombre">Nombre del vendedor:</label>
            <input class="input-field" type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label class="labels" for="autos-vendidos">Autos vendidos:</label>
            <input class="input-field" type="number" id="autos-vendidos" name="autos-vendidos" placeholder="Ejemplo: 7"required>
        </div>
        <div>
            <label class="labels" for="precio-autos">Precio de autos:</label>
            <input class="input-field" type="number" id="precio-autos" name="precio-autos" placeholder="Ejemplo: 30000000"required>
        </div>
        <p id="salidas">
            <?php 
                if (isset($_POST['submit'])) {
                    echo "Salario final de ".$nombre." es: ".$salarioFinal;
                }
            ?>
        </p>
        <button type="submit" id="boton-enviar" name="submit">Calcular Salario</button>
    </form>
</div>
</body>
</html>