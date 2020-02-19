<div class="modal fade" id="addproject" aria-labelledby="global" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajouter un projet</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="include/exec_addproject.php" class="needs-validation" novalidate="novalidate">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="img" placeholder="Image de présentation du projet (URL)" name="img" required="required" />
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="desc" placeholder="Courte description du projet" name="desc" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="projetcategorie" class="custom-select" required="required">
                            <option selected>A quel catégorie appartient ce projet ?</option>
                            <option value="1">Site Web</option>
                            <option value="2">Application Mobile</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Poster le projet sur le portfolio</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" aria-labelledby="global" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajouter un projet</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="include/exec_edit.php" class="needs-validation" novalidate="novalidate">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="img" placeholder="Image de présentation du projet (URL)" name="img" required="required" />
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="desc" placeholder="Courte description du projet" name="desc" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="projetcategorie" class="custom-select" required="required">
                            <option selected>A quel catégorie appartient ce projet ?</option>
                            <option value="1">Site Web</option>
                            <option value="2">Application Mobile</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Poster le projet sur le portfolio</button>
                </form>
            </div>
        </div>
    </div>
</div>


