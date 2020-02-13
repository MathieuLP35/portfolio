<?php
if(!isset($_GET['lang']) || empty($_GET['lang'])){
    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = "fr";
    }
  }
  else{
      switch($_GET['lang']){
          case "fr":
          $_SESSION['lang'] = "fr";
          break;
          case "en":
          $_SESSION['lang'] = "en";
          break;
          default :
          $_SESSION['lang'] = "fr"; //au cas ou quelqu'un rentre autre chose que fr/en ou it
          break;
      }
  }
  
  switch($_SESSION['lang']){
          case "fr":
          $fichier_langage = "langue/fr.php";
          break;
          case "en":
          $fichier_langage = "langue/en.php";
          break;
  }
  require($fichier_langage);

  ?>