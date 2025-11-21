<?php
    require('funciones.php');

    $fila = $_POST['filas'];
    $col = $_POST['columnas'];

    echo creartabla($fila, $col);

?>