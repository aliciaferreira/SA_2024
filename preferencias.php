<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$equipo=(isset($_GET['equipo'])?$_GET['equipo']:"No cargaste tu equipo de fútbol");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu equipo de fútbol es: $equipo";

?>