<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
<?php
    if(isset($_SESSION['login_data'])){
        echo '<a href="?logout" class="dropdown-item">'.$DECONNEXION.'</a>';
        if($_SESSION['login_data']['admin'] == 1){
            echo '<a href="admin/index.php" class="dropdown-item">'.$ADMIN.'</a>';
        }
    }
    else{
        echo '<a href="#" class="dropdown-item" data-toggle="modal" data-target="#inscription">'.$INSCRIPTION.'</a>';
        echo '<a href="#" class="dropdown-item" data-toggle="modal" data-target="#connexion">'.$CONNEXION.'</a>';
    }
?>
</div>