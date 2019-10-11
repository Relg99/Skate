<?php
    $server="localhost:8080";
    session_start();
    unset($_SESSION["datos"]);
    unset($_SESSION["total"]);
    unset($_SESSION['IDPay']);
    unset($_SESSION['CorreoPay']);
    unset($_SESSION['NombrePay']);
    unset($_SESSION['ApellidoPay']);
    header('Location: /Skate/Vistas/cetipay/login-compra.html');
?>