<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$letra=(isset($_GET['letra'])?$_GET['letra']:"No cargaste tu Estilo de Letra preferido");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu estilo de letra es : $letra";

?>