<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");

$juegoPreferido=(isset($_GET['juegoPreferido'])?$_GET['juegoPreferido']:"No cargaste un color preferido");

echo "Hola $usuario <br>";
echo "Tu color preferido es: $color <br>";
echo "Tu color preferido es: $juegoPreferido <br>";

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu flor preferida es: $flor";
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu musica preferida es: $music";

?>