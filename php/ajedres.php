
<?php
    echo "<table>";
    for($fila = 1; $fila <= 8; $fila++){
        echo "<tr>";
        for($col = 1; $col <= 8; $col++){
            if(($fila + $col) % 2 == 0){
                echo "<td style='background-color: aliceblue; width: 100px; height: 100px;'></td>";
            }else{
                echo "<td style='background-color: black; width: 100px; height: 100px;'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>