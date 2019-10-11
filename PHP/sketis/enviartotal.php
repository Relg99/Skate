<?php
    $server="localhost:8080";
    session_start();
    $json_data = json_encode($_SESSION["envio"]);
    print $json_data;
    header('Location: /Skate/PHP/cetipay/recibirtotal.php?data='.$json_data);
?>