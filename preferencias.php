<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$music=(isset($_GET['music'])?$_GET['music']:"No cargaste un tipo de música preferida");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu música preferida es: $music";

?>