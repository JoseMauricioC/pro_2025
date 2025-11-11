<div>
    <?php
    function asteriscos($a){
    echo "Los asteriscos son de $a X $a <br>";

        for($i = 1; $i <= $a; $i++){
            for($j = 1; $j <= $a; $j++){
                echo "*";
            }
            echo "<br>";
        }
        
    }

    function asteriscos2($a){
        echo "<h3>forma triangular</h3>";
        $columna = $a;

        for($i = 1; $i <= $a; $i++){
            for($j = 1; $j <= $columna; $j++){
                echo "*";
            }
            $columna -=1;
            echo "<br>";

        }
        
    }

    function asteriscos3($a){
        echo "<h3>forma triangular</h3>";

        for($i = 1; $i <= $a; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";

        }
        
    }
?>
</div>

<div>
    <a href="pagina.html">volver</a>
</div>