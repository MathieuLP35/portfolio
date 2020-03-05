<section id="recommandation">
    <div class="container d-flex flex-row flex-wrap justify-content-around">
        <h2 class="text-center"><?php echo $RPRES; ?></h2>
        <div class="table-responsive">
            <table width="100%" cellspacing="0">
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    </tr>
                </tfoot>
                <tbody id="myTable">
                    <?php require "include/recommandation/showrecommandation.php"; ?>
                </tbody>
            </table>
            <ul class="pagination d-flex justify-content-center">
                <?php 
                if ($page >= 2) 
                {
                ?>
                    <li><a href="<?php echo "?page=$pagePrecedente#recommandation"; ?>" class="btn-social btn-outline-white" title="<?php echo $RPREC; ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></li>
                <?php
                }
                for ($page=1; $page <= $total_pages ; $page++)
                {
                ?>
                    <li><a href="<?php echo "?page=$page#recommandation"; ?>" class="btn-social btn-outline-white"><?php  echo $page; ?></a></li>
                <?php 
                } 
                if ($pageSuivante <= $total_pages) 
                {
                ?>
                    <li><a href="<?php echo "?page=$pageSuivante#recommandation"; ?>" class="btn-social btn-outline-white" title="<?php echo $RSUIV; ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                <?php 
                } 
                ?> 
            </ul>
        </div>
        <button type="submit" class="btn btn-contact my-5 col-md-3" data-toggle="modal" data-target="#add-recommandation"><?php echo $RDEPOT; ?></button>
        <div class="modal fade" id="add-recommandation" aria-labelledby="add-recommandation" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $RDEPOT; ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="include/recommandation/exec_recommandation.php" class="needs-validation" novalidate="novalidate">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required="required" />
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="desc" placeholder="Recommandation" name="desc" required="required"></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary btn-block"><?php echo $RENVOI; ?></button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


