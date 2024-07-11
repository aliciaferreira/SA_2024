<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
<<<<<<< HEAD
$equipo=(isset($_GET['equipo'])?$_GET['equipo']:"No cargaste tu equipo de fútbol");
$deporte=(isset($_GET['deporte'])?$_GET['deprote']:"deporte favoritol");
$tango=(isset($_GET['tango'])?$_GET['tango']:"tango");
$baile=(isset($_GET['baile'])?$_GET['baile']:"baile");
$licol=(isset($_GET['lineacol'])?$_GET['lineacol']:"linea de colectivos");
echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu equipo de fútbol es: $equipo";
echo "Tu deporte favorito :"$deporte;
echo"tango ;"$tango;
echo"Tu baile preferido "$baile;
echo"Tu linea de colectivos"$licol;
=======
$serie=(isset($_GET['serie'])?$_GET['serie']:"No cargaste una serie de television preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");
$animal=(isset($_GET['animal'])?$_GET['animal']:"No cargaste una animal preferido");
$artista=(isset($_GET['artista'])?$_GET['artista']:"No cargaste un artista preferido");
$clima=(isset($_GET['clima'])?$_GET['clima']:"No cargaste un clima");
$comida=(isset($_GET['comida'])?$_GET['comida']:"No cargaste tu comida preferida");
$letra=(isset($_GET['letra'])?$_GET['letra']:"No cargaste un Estilo de letra");

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

echo "Saludos $usuario";



>>>>>>> ed891ebeb5a06c22091e0420923735e58e2d0125


?>