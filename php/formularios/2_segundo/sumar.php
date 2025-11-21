<?php

$numero = $_POST["h"];

$suma = 0;

    for($i = 1; $i <= $numero; $i++){
        $suma += $_POST["numero".$i];
    }
    
    echo "La suma es: $suma";
?>