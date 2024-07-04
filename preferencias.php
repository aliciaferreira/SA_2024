<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$equipo=(isset($_GET['equipo'])?$_GET['equipo']:"No cargaste tu equipo de fútbol");
$deporte=(isset($_GET['deporte'])?$_GET['deprote']:"deporte favoritol");
$deporte=(isset($_GET['celular'])?$_GET['celular']:"deporte favoritol")
$dire=(isset($_GET['direccion'])?$_GET['direccion']:"direccion")
echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu equipo de fútbol es: $equipo";
echo "Tu deporte favorito :"$deporte;
echo"Tu numero de celular ;"$celular;
echo"Tu direccion "$dire;


?>