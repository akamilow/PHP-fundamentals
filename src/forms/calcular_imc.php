<?php
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);
    }
?>