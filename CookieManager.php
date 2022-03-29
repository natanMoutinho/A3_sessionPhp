<?php  
    $cor = $_GET["cor"];
    if(isset($cor)){
        setcookie('corbg', $cor);
        header('Location: http://localhost/session/AreaAdmin.php');
    } 
    function getColorCookie(){
        if(isset($_COOKIE['corbg'])) {
            return $_COOKIE['corbg'];
        }else {
            echo '';
        }
    }

?>