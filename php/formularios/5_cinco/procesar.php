<?php
// Verificamos si se presionó el botón "enviar"
if (isset($_POST['enviar'])) {

    // Verificamos si los campos nombre y edad fueron enviados
    if (isset($_POST['nombre']) && isset($_POST['edad'])) {

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Edad: " . $edad . " años";
    } else {
        echo "Faltan datos en el formulario.";
    }

} else {
    echo "El formulario no fue enviado correctamente.";
}
?>
