<?php
    function creartabla($x, $y){
        echo "<table border='1'>";
        for($i = 1; $i <= $x; $i++){
            echo "<tr>";
            for($j = 1; $j <= $y; $j++){
                echo "<th>juancito</th>";
            }
            echo "</tr>";
        }
        echo "</table>";

    }

?>

<a href="tabla.html">volver</a>