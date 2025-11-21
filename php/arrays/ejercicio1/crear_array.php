<?php
    $numero = $_POST['h'];

    $array = [];

    for($i = 0; $i < $numero; $i++){
        $array[$i] = $_POST['valor' . $i];
    }

    for($j = 0; $j < $numero; $j++){
        echo "[$j] =>".$array[$j]."<br>";
    }

    print_r($array);
?>