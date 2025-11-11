<?php
    echo "<h1>TIPOS DE ARRAYS</h1>";

    echo "<h2>escalares</h2>";

    $estudiantes = array("juan", "maria", "jose", "carla");
    
    $estudiantes[3] = "claudia"; //cambia el valor 

    echo $estudiantes[3];

    echo "<h2>asociativo</h2>";

    $tutor=[
        "nombre"=> "juan",
        "apellido"=> "perez",
        "edad"=> 30
    ];

    echo $tutor["edad"];

    echo "<h2>multiples dimensiones</h2>";

    $tutor_2=[
        "nombre"=> "juan",
        "apellido"=> "perez",
        "edad"=> 30,
        "materia"=>[
            "fisica", "quimica", "matematicas", "ingles"
        ]
    ];

    echo $tutor_2["materia"][2];
    echo count($tutor_2, COUNT_RECURSIVE);
?>