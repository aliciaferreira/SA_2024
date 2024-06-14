<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$serie=(isset($_GET['serie'])?$_GET['serie']:"No cargaste una serie de television preferida");

$music=(isset($_GET['music'])?$_GET['color']:"No cargaste un tipo de musica preferida");

echo "Hola $usuario";
echo "Tu musica preferida es: $music";
echo "Tu serie preferida es: $serie <br>";

?>