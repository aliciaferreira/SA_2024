<?php
$usuario = (isset($_GET['usuario']) ? $_GET['usuario'] : "No cargaste un nombre de usuario");
$color = (isset($_GET['color']) ? $_GET['color'] : "No cargaste un color preferido");
$serie = (isset($_GET['serie']) ? $_GET['serie'] : "No cargaste una serie preferida");
$music = (isset($_GET['music']) ? $_GET['music'] : "No cargaste un tipo de música preferida");
$boardgame = (isset($_GET['boardgame']) ? $_GET['boardgame'] : "No cargaste tu juego de mesa preferido");

echo "Hola $usuario <br>";
echo "Tu color preferido es: $color <br>";
echo "Tu serie preferida es: $serie <br>";
echo "Tu música preferida es: $music <br>";
echo "Tu juego de mesa preferido es: $boardgame <br>";
?>
