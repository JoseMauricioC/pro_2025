<?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    $operacion = $_GET["operacion"];
    $resultado = 0;

    switch ($operacion) {
        case "suma":
            $resultado = $a + $b;
            break;
        case "resta":
            $resultado = $a - $b;
            break;
        case "multiplicacion":
            $resultado = $a * $b;
            break;
        case "division":
            if ($b != 0) {
                $resultado = $a / $b;
            } else {
                echo "No se puede dividir entre cero.";
                exit;
            }
            break;
        default:
            echo "Operación no válida.";
            exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>El resultado es: <?php echo $resultado; ?></h2>
    <br>
    <a href="form_datos.html">Volver al inicio</a>
</body>
</html>
