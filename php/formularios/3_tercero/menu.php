<?php
    $a = $_GET["a"];
    $b = $_GET["b"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de operaciones</title>
</head>
<body>
    <h2>Selecciona una operación</h2>

    <p>
        <a href="calcular.php?a=<?php echo $a; ?>&b=<?php echo $b; ?>&operacion=suma">Suma</a><br>
        <a href="calcular.php?a=<?php echo $a; ?>&b=<?php echo $b; ?>&operacion=resta">Resta</a><br>
        <a href="calcular.php?a=<?php echo $a; ?>&b=<?php echo $b; ?>&operacion=multiplicacion">Multiplicación</a><br>
        <a href="calcular.php?a=<?php echo $a; ?>&b=<?php echo $b; ?>&operacion=division">División</a>
    </p>
</body>
</html>
