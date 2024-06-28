<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$elementoDeLaTablaPeriodica=(isset($_GET['elementoDeLaTablaPeriodica'])?$_GET['elementoDeLaTablaPeriodica']:"No cargaste un elemento de la tabla periódica preferido");
echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu elemento de la tabla periódica preferido es: $elementoDeLaTablaPeriodica";

?>