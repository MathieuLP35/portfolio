<div class="card-header"><i class="fas fa-table mr-1"></i>Liste des projets</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom du projet</th>
                    <th>Description du projet</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                </tr>
            </tfoot>
            <tbody>

<?php
    $reponse = $db->prepare("SELECT * FROM projet_categorie, projet WHERE projet.id_Projet_categorie=projet_categorie.id_Projet_categorie ORDER BY projet.id_projet DESC LIMIT 6");
    $reponse->execute();

    while ($data=$reponse->fetch())
    {
        echo 
        "<tr><td>".$data["id_Projet"]."</td><td>".$data["projet_Nom"]."</td><td>".$data["projet_Description"]."</td>
            <td>
            <div class='btn-group'>
                <button type='button' class='btn btn-primary'>Action</button>
                <button type='button' class='btn btn-primary dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>
                    <span class='caret'></span>
                </button>
                <div class='dropdown-menu'>
                    <a class='dropdown-item cursor' onclick=\"if(confirm('Êtes vous sur de vouloir supprimer le projet ".$data["projet_Nom"]."?')){ document.location.href='include/delete-projet.php?id=".$data["id_Projet"]."'; }\"'>Supprimer</a>
                </div>
            </div>
        </td>
        </tr>
        ";
    }
?>