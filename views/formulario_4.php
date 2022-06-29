<?php
    require '../src/forms/cuota_fija.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario_4_style.css">
    <title>FORMULARIO 4</title>
</head>
<body>
<div id="container">
    <h1 id="title">Formulario 4</h1>
    <p class="description">
    </p>
    
    <form method="POST">
        <div>
            <label class="labels" for="dni">Cédula del cliente:</label>
            <input class="input-field" type="number" id="dni" name="dni" placeholder="Ejemplo: 10033224" required>
        </div>
        <div>
            <label class="labels" for="nombre">Nombre del cliente:</label>
            <input class="input-field" type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label class="labels" for="monto-credito">Monto del crédito:</label>
            <input class="input-field" type="number" step="any" id="monto-credito" name="monto-credito" placeholder="Ejemplo: 1000000" required>
        </div>
        <div>
            <label class="labels" for="interes-mensual">Tasa de interés mensual:</label>
            <input class="input-field" type="number" step="any" id="interes-mensual" name="interes-mensual" placeholder="Ejemplo: 0.02" required>
        </div>
        <div>
            <label class="labels" for="mes">Plazo en meses:</label>
            <input class="input-field" type="number" id="mes" name="mes" placeholder="Ejemplo: 3" required>
        </div>
        <button type="submit" id="boton-enviar" name="submit">Calcular</button>
    </form>
    <p id="salidas">
        <?php 
            if (isset($_POST['submit'])) {
                echo "Cédula: ".$dni;
                echo "<br>";
                echo "Cliente: ".$nombre;
            }
        ?>
    </p>
    <table>
        <thead>
          <tr>
            <th>No. Cuota</th>
            <th>Saldo anterior</th>
            <th>Valor Cuota Fija</th>
            <th>Abono Interés</th>
            <th>Abono Capital</th>
            <th>Nuevo Saldo</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($_POST['submit'])) { ?>
            <tr>
                <td><?php echo 1 ?></td>
                <td><?php echo $montoCredito ?></td>
                <td><?php echo round($cuotaFija, 2) ?></td>
                <td><?php echo $abonoInteres = round($montoCredito * $interesMensual / 100, 2) ?></td>
                <td><?php echo $abonoCapital = round($cuotaFija - $abonoInteres, 2) ?></td>
                <td><?php echo $nuevoSaldo = round($montoCredito - $abonoCapital, 2) ?></td>
            </tr>
        <?php } ?>
        <?php if(isset($_POST['submit'])) for($i = 2; $i <= $mes; $i++) { ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo round($montoCredito -= $cuotaFija) ?></td>
              <td><?php echo round($cuotaFija) ?></td>
              <td><?php echo $abonoInteres = round($montoCredito * $interesMensual / 100) ?></td>
              <td><?php echo $abonoCapital = round($cuotaFija - $abonoInteres) ?></td>
              <td><?php echo $nuevoSaldo = round($montoCredito - $abonoCapital) ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>