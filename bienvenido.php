<?php
// Inicia la sesión
session_start();

// Comprueba si la cookie del nombre de usuario existe
if (isset($_COOKIE['nombre_usuario'])) {
    $nombre = $_COOKIE['nombre_usuario'];
    echo "<h1>Bienvenido de nuevo, $nombre!</h1>";
} else {
    echo "<h1>Bienvenido! Por favor, rellena el formulario.</h1>";
}
?>
