<?php
  session_start();

  if (isset($_GET["logout"])){
    unset($_SESSION['login_data']);
    header('Location: index.php');
    exit();
  }

  require "include/core/bdd.php";
  require "langue/langue.php";
  
  require "include/index/head.php";
  require "include/index/navbar.php";
  require "include/index/home.php";
  require "include/index/portfolio.php";
  require "include/index/recommandation.php";
  require "include/index/contact.php";

  require "include/inscription/inscription.php";
  require "include/connexion/connexion.php";

  require "include/index/footer.php";

?>