<?php
if (isset($_POST['UsarRadio'])) {
    setcookie("noticia", $_POST['UsarRadio'], time() + (86400 * 30), "/"); 
    header("Location: 2formularioCookie.html");
    exit;
} else {
    header("Location: 2formularioCookie.html");
    exit;
}
?>
