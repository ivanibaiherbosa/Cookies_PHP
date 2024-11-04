<?php
session_start();

if (isset($_COOKIE['nombre_usuario'])) {
    $nombre = $_COOKIE['nombre_usuario'];
    echo "<h1>Bienvenido de nuevo, $nombre!</h1>";
} else {
    echo "<h1>Bienvenido! Por favor, rellena el formulario.</h1>";
}
?>
