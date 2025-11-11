
    <form action="sumar.php" method="post">
        <?php 
            $numero = $_GET["numero"];

            for($i = 1; $i <= $numero; $i++){
            echo "<input type='number' name='numero$i' ><br>";}
        ?>

        <input type="submit" value="sumar">
        <input type="hidden" name="h" value="<?php echo $numero; ?>">

    </form>

<a href="formulario.html">volver</a>