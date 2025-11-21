<?php
// Configuración básica del tablero
$filas = 8;
$columnas = 8;
$tamano_celda = "50px"; // Define el tamaño de cada celda
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablero de Ajedrez en PHP</title>
    <style>
        /* 1. Estilos del contenedor principal (el tablero) */
        .tablero {
            border-collapse: collapse; /* Elimina los espacios entre las celdas */
            border: 5px solid #333; /* Borde alrededor del tablero */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5); /* Sombra para profundidad */
        }
        /* 2. Estilos de la celda */
        .celda {
            width: <?php echo $tamano_celda; ?>;
            height: <?php echo $tamano_celda; ?>;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            font-size: 1.2em;
        }
        /* 3. Definición de colores */
        .blanca {
            background-color: #f0d9b5; /* Color claro (marfil) */
            color: #b58863; /* Texto oscuro */
        }
        .negra {
            background-color: #b58863; /* Color oscuro (marrón) */
            color: #f0d9b5; /* Texto claro */
        }
    </style>
</head>
<body>

    <h1>Tablero de Ajedrez Generado con PHP</h1>

    <table class="tablero">
        <?php
        // Bucle principal para las filas
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            
            // Bucle anidado para las columnas (celdas)
            for ($j = 0; $j < $columnas; $j++) {
                
                // Lógica de color: 
                // La suma de la fila ($i) y la columna ($j) es par (0, 2, 4, etc.) 
                // en las celdas de un color, e impar (1, 3, 5, etc.) en el otro.
                
                if (($i + $j) % 2 == 0) {
                    $clase_color = "blanca";
                } else {
                    $clase_color = "negra";
                }
                
                // Muestra las coordenadas (opcional, para referencia)
                $contenido_celda = chr(65 + $j) . ($filas - $i); // Convierte a A1, H8, etc.
                
                // Imprime la celda con la clase de color determinada
                echo "<td class='celda $clase_color'>$contenido_celda</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>