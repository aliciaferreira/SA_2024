<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");

echo "Hola $usuario!! <br>";
echo "Tu color preferido es: $color";
echo "Tu musica preferida es: $music";
echo "Tu juego de mesa preferido es: $boardgame";

?>