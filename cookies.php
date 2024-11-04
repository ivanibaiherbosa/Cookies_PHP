<?php

$nombre = "usuario";
$valor="pepe";


$expiracion = time() + 60 * 30;
$ruta = '/cookies/';

$dominio = 'ejemplo.es';
$seguridad=false;
$solohttp=true;

$setcookie = true;

setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $solohttp);

echo "cookie establecida";

$valorCookie = $_COOKIE['usuario'];

echo $valorCookie;

?>