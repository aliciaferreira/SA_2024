<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$nombre=(isset($_GET['nombre'])?$_GET['nombre']:"No cargaste un nombre");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");

echo "Hola $nombre ($usuario)";
echo "Tu color preferido es: $color";

?>