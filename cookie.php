<?php
        if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
            include "navbarregister.php";
        }else{
            include "navbar.php";
        }
    
?>

