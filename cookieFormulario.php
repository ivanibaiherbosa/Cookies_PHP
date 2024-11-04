<?php

// Inicia la sesión para manejar las cookies
session_start();

// Comprueba si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe el nombre del formulario
    $nombre = $_POST['nombre'];

    // Guarda el nombre en una cookie que expira en 30 días
    setcookie("nombre_usuario", $nombre, time() + (30 * 24 * 60 * 60));

    // Redirige al usuario de vuelta a la página del formulario
    header("Location: bienvenido.php");
    exit();
}

?>



