<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$serie=(isset($_GET['serie'])?$_GET['serie']:"No cargaste una serie de television preferida");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");
$animal=(isset($_GET['animal'])?$_GET['animal']:"No cargaste una animal preferido");


$artista=(isset($_GET['artista'])?$_GET['artista']:"No cargaste un artista preferido");
echo "Hola $usuario";
$clima=(isset($_GET['clima'])?$_GET['clima']:"No cargaste un clima");
?><br><br><?php
echo "Hola $usuario";?><br><br><?php
echo "Tu color preferido es: $color";?><br><br><?php
echo "Tu clima preferido es: $clima";?><br><br><?php
echo "Saludos .";

echo "Tu color preferido es: $color";
echo "Tu flor preferida es: $flor";
echo "Tu musica preferida es: $music";
echo "Tu juego de mesa preferido es: $boardgame";

echo "Tu artista preferido es: $artista";


echo "Tu animal preferido es: $animal";
?>