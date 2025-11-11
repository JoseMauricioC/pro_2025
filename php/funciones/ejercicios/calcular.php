<?php
    require('funciones.php');

    $fila = $_POST['filas'];
    $col = $_POST['columnas'];

    $numero = $_POST['numero'];

    echo asteriscos($numero);
    echo asteriscos2($numero);
    echo asteriscos3($numero);


?>