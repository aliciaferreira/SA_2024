<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");
$deporte=(isset($_GET['deporte'])?$_GET['deporte']:"No cargaste un tipo de deporte preferido");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu musica preferida es: $music";
echo "Tu musica preferida es: $deporte";

?>