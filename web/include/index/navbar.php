<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><?php echo _NOM; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home"><i class="fa fa-home"></i> <?php echo _ACCUEIL; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio"><i class="fa fa-address-card"></i> <?php echo _PORTFOLIO; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#recommandation"><i class="fa fa-sticky-note-o"></i> <?php echo _RECOMMANDATION; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"><i class="fa fa-envelope"></i> <?php echo _CONTACT; ?></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="?lang=fr"><?php echo _LANGUE_FR; ?></a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="?lang=en"><?php echo _LANGUE_EN; ?></a>
        </li>
        <li class="nav-item dropdown">
            <?php require "include/compte/compte.php" ?>
        </li>
        </ul>
        </div>
    </nav>
</header>