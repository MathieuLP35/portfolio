<div class="modal fade" id="connexion" aria-labelledby="connexion" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $CCONNECTER; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="include/connexion/exec_connexion.php" class="needs-validation" novalidate="novalidate">
            <div class="form-group">
                <input type="email" class="form-control" id="mail" placeholder="<?php echo $CEMAIL; ?>" name="mail" required="required" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="mdp" placeholder="<?php echo $CPASSWORD; ?>" name="mdp" required="required" />
            </div>
          <button type="submit" class="btn btn-primary btn-block"><?php echo $CENVOI; ?></button>
        </form>
      </div>
    </div>
  </div>
</div>
