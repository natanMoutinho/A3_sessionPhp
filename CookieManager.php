<?php  
    $cor = $_GET["cor"];
    if(isset($cor)){
        setcookie('corbg', $cor, (time()+1800));
        header('Location: http://localhost/Atividade3_Modulo2_ProgWeb_NatanMoutinho_PedroLucasBastos/session/AreaAdmin.php');
    } 
    function getColorCookie(){
        if(isset($_COOKIE['corbg'])) {
            return $_COOKIE['corbg'];
        }else {
            return 'ffffff';
        }
    }
    function rmColorCookie(){
        setcookie('corbg', null, -1, '/Atividade3_Modulo2_ProgWeb_NatanMoutinho_PedroLucasBastos/session');
    }
?>