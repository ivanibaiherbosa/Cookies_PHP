<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    setcookie("nombre_usuario", $nombre, time() + (30 * 24 * 60 * 60));

    header("Location: bienvenido.php");
    exit();
}

?>



