<?php
    $cadena = "holA mundo";

    echo "cadena actual: $cadena <br>";

    echo strtolower($cadena);
    echo "<br>";
    echo strtoupper($cadena);
    echo "<br>";
    echo ucfirst($cadena);
    echo "<br>";
    echo ucwords($cadena);
    echo "<br>";
    echo strlen($cadena);
    echo "<br>";
    echo str_word_count($cadena);
    echo "<br>";
    echo strrev($cadena);

    echo "<h2>Convertir Cadena en Array</h2>";
    
    $palabra = "programacion";

    $array1 = str_split($palabra);

    echo $array1[1];

    echo "<br>";
    //**************************************** */
    //variable = funcion(delimitador, cadena, limitador)
    $a = "juancito pinto 2025";

    $array2 = explode(" ",$a);

    echo $array2[2];

?>