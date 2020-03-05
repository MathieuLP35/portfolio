<?php 

    require "include/core/bdd.php"; 

    $reponse = $db->prepare("SELECT * FROM projet_categorie, projet WHERE projet.id_Projet_categorie=projet_categorie.id_Projet_categorie ORDER BY projet.id_projet DESC LIMIT 6");
    $reponse->execute();

    while ($data=$reponse->fetch())
    {   
        echo '
        <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="'.$data["projet_Url"].'">
          <img class="img-fluid mx-auto d-block" src="'.$data["projet_Image"].'" alt="">
          <div class="portfolio-box-caption">
            <div class="project-Categorie text-white-50">
              '.$data["projet_categorie_Titre"].'
            </div>
            <div class="project-name">
            '.$data["projet_Nom"].'
            </div>
          </div>
        </a>
        </div>
        ';
    }
?>
