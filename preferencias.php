<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");

$juegoPreferido=(isset($_GET['juegoPreferido'])?$_GET['juegoPreferido']:"No cargaste un color preferido");

echo "Hola $usuario <br>";
echo "Tu color preferido es: $color <br>";
echo "Tu color preferido es: $juegoPreferido <br>";


?>