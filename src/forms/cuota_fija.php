<?php
    if (isset($_POST['submit'])) {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $montoCredito = $_POST['monto-credito'];
        $interesMensual = $_POST['interes-mensual'];
        $mes = $_POST['mes'];

        $cuotaFija = $montoCredito*($interesMensual*(1+$interesMensual)**$mes)/((1+$interesMensual)**3-1);
    }
?>