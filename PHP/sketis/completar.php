<?php
    $server="localhost:8080";
    require 'descontararticulos.php';
    $_SESSION["reset"] = 0;
    require 'carro.php';
    header('Location: /Skate/Vistas/skaters/index.html');
?>