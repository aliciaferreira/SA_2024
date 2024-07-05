<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$clima=(isset($_GET['clima'])?$_GET['clima']:"No cargaste un clima");
?><br><br><?php
echo "Hola $usuario";?><br><br><?php
echo "Tu color preferido es: $color";?><br><br><?php
echo "Tu clima preferido es: $clima";?><br><br><?php
echo "Saludos ."

?>