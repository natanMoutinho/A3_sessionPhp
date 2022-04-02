<?php
    include_once './CookieManager.php';
    session_start();
    if (isset($_SESSION['user'])) {
        session_destroy();
        rmColorCookie();
        header('Location: http://localhost/Atividade3_Modulo2_ProgWeb_NatanMoutinho_PedroLucasBastos/session/FormLogin.php');
    }
?>