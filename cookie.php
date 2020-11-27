<?php
        if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
            echo $_SESSION['user'].' session<br>';
            echo $_COOKIE['user'].' cookie';
            include "navbarregister.php";
        }else{
            
            include "navbar.php";
        }
    
?>

