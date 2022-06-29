<?php
    if (isset($_POST['submit'])) {
        $salarioInicial = 737000;
        $nombre = $_POST['nombre'];
        $autosVendidos = $_POST['autos-vendidos'];
        $precioAutos = $_POST['precio-autos'];

        $comision1 = 50000 * $autosVendidos;
        $comision2 = $autosVendidos * 0.05;

        $salarioFinal = $salarioInicial + $comision1 + $comision2;
    }
?>