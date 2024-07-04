<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['music']:"No cargaste un tipo de musica preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");
>>>>>>> b6a6f20adf790206db6a91a45be4f41f99264538

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu flor preferida es: $flor";
echo "Tu serie preferida es: $serie <br>";
echo "Tu musica preferida es: $music";
<<<<<<< HEAD
echo "Tu musica preferida es: $deporte";
=======
echo "Tu juego de mesa preferido es: $boardgame";
>>>>>>> b6a6f20adf790206db6a91a45be4f41f99264538

?>