<?php
    function saludo($nombre){
        return "hola mi nombre es $nombre";
    }

    echo saludo("juancito");

    $usuario = "maria";
    echo "<br>";
    echo saludo($usuario);

    echo "<hr>";
    //***************************************************** */

    function promedio_alumnos($nota_1, $nota_2, $nota_3){
        $promedio = ($nota_1 + $nota_2 + $nota_3)/3;

        return $promedio;
    }

    echo "El promedio es: ".promedio_alumnos(7,8,6);
    echo "<br>";

    echo "El promedio es: ".promedio_alumnos(4,8,6);
    echo "<br>";

    echo "El promedio es: ".promedio_alumnos(7,5,5);
    echo "<br>";
?>