<section id="contact">
    <div class="container">
        <h2 class="d-flex justify-content-center "><?php echo _MECONTACTER; ?></h2>
        <form action="include/exec-contact.php" method="POST" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <p class="d-flex justify-content-center text-white"><?php echo _RFORM; ?></p>
                    <input type="text" class="form-control" id="nom" placeholder="<?php echo _RNAME; ?>" name="nom" required>
                    <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="<?php echo _RMAIL; ?>" name="email" required>
                    <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="objet" placeholder="<?php echo _RMAILOBJECT; ?>" name="objet" required>
                    <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea type="text" class="form-control" id="message" placeholder="<?php echo _RMAILCONTENT; ?>" name="message" required></textarea>
                    <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
                </div>
            </div>
        </div>
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="confidentialité" required>
            <label class="custom-control-label text-white" for="customCheck"><?php echo _RCOCHE; ?></label>
            <div class="invalid-feedback"><?php echo _RFORMCHAMP; ?></div>
        </div>
        <button type="submit" class="btn btn-contact"><?php echo _RGO; ?></button>
        </form>
    </div>
</section>