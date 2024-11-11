<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$musica=(isset($_GET['musica'])?$_GET['musica']:"No cargaste tu musica preferia");
$cantante=(isset($_GET['cantante'])?$_GET['cantante']:"No cargaste un cantante preferido");
$instrumento_musical=(isset($_GET['instrumento-musical'])?$_GET['instrumento-musical']:"No cargaste un instrumento musical");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste tu banda preferida");

echo "Hola $usuario <br>";
echo "Tu color preferido es: $color <br>";
echo "Tu musica preferida es: $musica <br>";
echo "Tu cantante favorito es : $cantante <br>";
echo "Tu instrumento musical es:  $instrumento_musical <br>";
echo "Tu banda preferida es:   $banda <br>";


?>