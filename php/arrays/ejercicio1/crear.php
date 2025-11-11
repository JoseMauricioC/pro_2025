<form action="crear_array.php" method="post">
    <?php
    $numero = $_POST['numero'];

    for($i = 0; $i < $numero; $i++){ ?>

        <label for="texto">Valor<?=$i+1?></label>
        <input type="number" name="valor<?= $i ?>"><br>

    <?php } ?>

    <input type="submit" value="enviar">
    <input type="hidden" name="h" value="<?= $numero ?>">
</form>



<a href="form.html">volver</a>