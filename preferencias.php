<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$letra=(isset($_GET['letra'])?$_GET['letra']:"No cargaste tu Estilo de Letra preferido");
$flor=(isset($_GET['flor'])?$_GET['flor']:"No cargaste una flor preferida");
$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu estilo de letra es : $letra";
echo "Tu flor preferida es: $flor";
echo "Tu musica preferida es: $music";


?>