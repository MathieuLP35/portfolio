<?php
    if(!isset($_GET['style']) || empty($_GET['style'])){
        if(!isset($_SESSION['style'])){
            $_SESSION['style'] = "white";
        }
    }
    else{
        switch($_GET['style']){
            case "white":
            $_SESSION['style'] = "white";
            break;
            case "black":
            $_SESSION['style'] = "black";
            break;
            default :
            $_SESSION['style'] = "white"; //au cas ou quelqu'un rentre autre chose que fr/en ou it
            break;
        }
    }
    
    switch($_SESSION['style']){
            case "white":
            $style = "style.css";
            $boot = "bootstrap.css";
            break;
            case "black":
            $style = "style2.css";
            $boot = "bootstrap2.css";
            break;
    }
?>