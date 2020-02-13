<div class="modal fade" id="inscription" aria-labelledby="inscription" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo _IINSCR; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="include/inscription/exec_inscription.php" class="needs-validation" novalidate>
            <div class="form-group">
                <input type="text" class="form-control" id="nom" placeholder="<?php echo _INOM; ?>" name="nom" required>
                <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="prenom" placeholder="<?php echo _IPRENOM; ?>" name="prenom" required>
                <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="mail" placeholder="<?php echo _IEMAIL; ?>" name="mail" required>
                <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="<?php echo _IPASSWORD; ?>" name="password" required>
                <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
            </div>
          <button type="submit" class="btn btn-primary btn-block"><?php echo _CENVOI; ?></button>
        </form>
      </div>
    </div>
  </div>
</div>
