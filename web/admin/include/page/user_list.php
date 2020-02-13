<div class="card-header"><i class="fas fa-table mr-1"></i>Liste des utilisateurs inscrits</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom du projet</th>
                        <th>Mot de passe</th>
                        <th>Admin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    </tr>
                </tfoot>
                <tbody>

<?php
    $reponse = $db->prepare("SELECT * FROM users");
    $reponse->execute();

    while ($data=$reponse->fetch())
    {
        $admin = ($data["users_Admin"]==1)?'Oui':'Non';
        echo 
        "<tr><td>".$data["id_users"]."</td><td>".$data["users_Name"]."</td><td>".$data["users_Pass"]."</td><td>".$admin."</td>
            <td>
            <div class='btn-group'>
                <button type='button' class='btn btn-primary'>Action</button>
                <button type='button' class='btn btn-primary dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>
                    <span class='caret'></span>
                </button>
                <div class='dropdown-menu'>
                    <a class='dropdown-item cursor' onclick=\"if(confirm('Êtes vous sur de vouloir supprimer ".$data["users_Name"]."?')){ document.location.href='include/delete.php?id=".$data["id_users"]."'; }\"'>Supprimer</a>
                </div>
            </div>
        </td>
        </tr>
        ";
    }
?>