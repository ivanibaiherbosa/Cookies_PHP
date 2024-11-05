<?php
if (isset($_POST['borrar'])) {
    setcookie("noticia", "", time() - 3600, "/");
    header("Location: 2formularioCookie.html");
    exit;
}
?>
