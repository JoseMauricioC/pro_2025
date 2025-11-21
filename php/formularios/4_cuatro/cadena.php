<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div{
                display: flex;
                align-items: center;
                justify-content: center;
                 width: 100px; 
                height: 100px; 
                 border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $nombre = $_POST['nombre'];

    $longitud = strlen($nombre);

    $array = str_split($nombre);

    for($i = 0; $i < $longitud; $i++)
    {
?>
    <div><?= $array[$i] ?></div>

<?php } ?>
</body>
</html>


