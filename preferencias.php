<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$comida=(isset($_GET['comida'])?$_GET['comida']:"No cargaste tu comida favorita");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu comida Favorita es: $comida";

?>