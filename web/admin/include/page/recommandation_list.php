<div class="card-header"><i class="fas fa-table mr-1"></i>Liste des recommandations</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Recommandation</th>
                        <th>Description de la recommandation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    </tr>
                </tfoot>
                <tbody>

<?php
    $reponse = $db->prepare("SELECT * FROM recommandation ORDER BY id_recommandation");
    $reponse->execute();

    while ($data=$reponse->fetch())
    {
        echo 
        "<tr><td>".$data["id_recommandation"]."</td><td>".$data["recommandation_Name"]."</td><td>".$data["recommandation_Desc"]."</td>
            <td>
            <div class='btn-group'>
                <button type='button' class='btn btn-primary'>Action</button>
                <button type='button' class='btn btn-primary dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>
                    <span class='caret'></span>
                </button>
                <div class='dropdown-menu'>
                <a class='dropdown-item cursor' onclick=\"if(confirm('Êtes vous sur de vouloir supprimer la recommandation de ".$data["recommandation_Name"]."?')){ document.location.href='include/delete-recommandation.php?id=".$data["id_recommandation"]."'; }\"'>Supprimer</a>
                </div>
            </div>
        </td>
        </tr>
        ";
    }
?>