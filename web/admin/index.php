<?php
    session_start(); 
    require "../include/core/bdd.php"; 

    if($_SESSION['login_data']['admin'] == 1) {

        require "include/haut.php";

        if (!isset($_GET["page"]))
            $_GET["page"]="users";
            
        switch ($_GET["page"])
        {
            case "recommandation":
                require "include/page/recommandation_list.php";
                break;
                
            case "projet":
                require "include/page/projet_list.php";
                break;

            case "users":
                require "include/page/user_list.php";
                break;
                
            default:
                require "include/page/user_list.php";
                break;
        }
        
        require "include/modal.php";

        require "include/bas.php";
    }
    else{
        header('Location: error.html');
    }
?>
