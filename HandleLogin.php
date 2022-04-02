<?php  
    include_once './Connection.php';
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $con = new Connection();
        $user = $con->login($_POST['login'],$_POST['password']);
        if ($_POST['login'] == $user[0]['login'] && $_POST['password'] == $user[0]['senha']) {
            session_start();
            $_SESSION['user'] = $_POST['login'];
            header('Location: http://localhost/Atividade3_Modulo2_ProgWeb_NatanMoutinho_PedroLucasBastos/session/AreaAdmin.php');
        } else {
            header('Location: http://localhost/Atividade3_Modulo2_ProgWeb_NatanMoutinho_PedroLucasBastos/session/AcessoNegado.php');
        }
    }

?>