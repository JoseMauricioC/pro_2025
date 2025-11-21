<?php
    $nombre = "juancito";
    $numero1 = 25;
    $numero2 = 25.3;
    $bool = true;

    echo $nombre;
    echo "<br>";
    echo $numero1;
    echo "<br>";
    echo $numero2;
    echo "<br>";
    echo $bool;

    echo "<hr>";
    echo "<h1>constantes</h1>";

    define("NOMBRE", "maria");
    echo NOMBRE;

    echo "<br>";

    const NOMBRE2 = "juancito";
    echo NOMBRE2;

    echo "<hr>";
    echo "<h1>array en php 7</h1>";

    define("ANIMALES", array("perro", "gato", "loro"));

    echo ANIMALES[1];

    echo "<h2>concatenar</h2>";

    echo "mi nombre es $nombre y tengo $numero1 anios";
    echo "<br>";
    echo "mi nombre es ".$nombre." y tengo ".$numero1." anios";
    echo "<br>";

    echo "<h2>concatenar y asignar </h2>";

    $variable = "esto es una prueba ";

    $variable.=2;

    echo $variable;

    echo "<h2>asignacion por referencia</h2>";

    $texto = "juan del diablo";

    $variable_1 = $texto;
    $variable_2 = &$texto;

    echo $variable_2."<br>";

    $texto = "juan de dios";

    echo $variable_2;



?>