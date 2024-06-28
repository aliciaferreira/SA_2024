<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$serie=(isset($_GET['serie'])?$_GET['serie']:"No cargaste una serie de television preferida");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['music']:"No cargaste un tipo de musica preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");


$juegoPreferido=(isset($_GET['juegoPreferido'])?$_GET['juegoPreferido']:"No cargaste un color preferido");

echo "Hola $usuario <br>";
echo "Tu color preferido es: $color <br>";
echo "Tu color preferido es: $juegoPreferido <br>";


echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu flor preferida es: $flor";
echo "Tu serie preferida es: $serie <br>";
echo "Tu musica preferida es: $music";
echo "Tu juego de mesa preferido es: $boardgame";


?>