<?php
    echo "<h2>condicion if tradicional</h2>";
    if(9 > 2){
        echo true;
    }else{
        echo false;
    }

    echo "<h2>condicion en una linea, operador ternario</h2>";

    echo (9 > 2)?true:false;
    echo "<br>";

    (9 < 2)?$respuesta="verdadero": $respuesta="false";
    echo $respuesta;

    echo "<br>";
    $resp = (10 < 9) ? "si":"no";
    echo $resp;

    echo "<h2>condicion if con : </h2>";

    if(9 > 3):
        echo true;
    else:
        echo false;
    endif;
?>