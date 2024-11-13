<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$serie=(isset($_GET['serie'])?$_GET['serie']:"No cargaste una serie de television preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");
$animal=(isset($_GET['animal'])?$_GET['animal']:"No cargaste una animal preferido");
$artista=(isset($_GET['artista'])?$_GET['artista']:"No cargaste un artista preferido");
$clima=(isset($_GET['clima'])?$_GET['clima']:"No cargaste un clima");
$comida=(isset($_GET['comida'])?$_GET['comida']:"No cargaste tu comida preferida");
$letra=(isset($_GET['letra'])?$_GET['letra']:"No cargaste un Estilo de letra");
$guitarrista=(isset($_GET['guitarrista'])?$_GET['guitarrista']:"No cargaste un Estilo de letra");
$club=(isset($_GET['club'])?$_GET['club']:"No cargaste un Estilo de letra");

echo "Hola $usuario";?><br><br><?php
echo "Tu color preferido es: $color";?><br><br><?php
echo "Tu serie preferida es: $serie";
echo "Tu flor preferida es: $flor";
echo "Tu musica preferida es: $music";
echo "Tu juego de mesa preferido es: $boardgame";
echo "Tu animal preferido es: $animal";
echo "Tu artista preferido es: $artista";
echo "Tu clima preferido es: $clima";?><br><br><?php
echo "Tu comida preferida es: $comida";?><br><br><?php
echo "Tu Estilo de Letra preferido es: $letra";?><br><br><?php
echo "Tu guitarrista preferido es: $guitarrista";?><br><br><?php
echo "Tu club preferido es: $club";?><br><br><?php


echo "Saludos $usuario";





?>