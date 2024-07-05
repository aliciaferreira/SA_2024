<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
<<<<<<< HEAD
$equipo=(isset($_GET['equipo'])?$_GET['equipo']:"No cargaste tu equipo de fútbol");
$deporte=(isset($_GET['deporte'])?$_GET['deprote']:"deporte favoritol");
$deporte=(isset($_GET['celular'])?$_GET['celular']:"deporte favoritol");
$dire=(isset($_GET['direccion'])?$_GET['direccion']:"direccion");
$colorauto=(isset($_GET['colorauto'])?$_GET['colorauto']:"colorauto");
echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu equipo de fútbol es: $equipo";
echo "Tu deporte favorito :"$deporte;
echo"Tu numero de celular ;"$celular;
echo "Tu color  de auto favorito"$colorauto;
echo"Tu direccion "$dire;

=======
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['music']:"No cargaste un tipo de musica preferida");
$boardgame=(isset($_GET['boardgame'])?$_GET['boardgame']:"No cargaste tu juego de mesa preferido");
$animal=(isset($_GET['animal'])?$_GET['animal']:"No cargaste una animal preferido");



echo "Hola $usuario";

echo "Tu color preferido es: $color";
echo "Tu flor preferida es: $flor";
echo "Tu serie preferida es: $serie <br>";
echo "Tu musica preferida es: $music";
echo "Tu juego de mesa preferido es: $boardgame";
>>>>>>> 05a6c6ba4d8eaf4601c548ca825a213099ccb5cd

echo "Tu animal preferido es: $animal";
?>