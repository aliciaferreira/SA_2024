<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
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


?>