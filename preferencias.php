<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$serie=(isset($_GET['serie'])?$_GET['serie']:"No cargaste una serie de television preferida");


echo "Hola $usuario <br>";
echo "Tu color preferido es: $color <br>";
echo "Tu serie preferida es: $serie <br>";

?>