<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
    <!--Navbar -->
    <?php
        if ($_SESSION["style"] == "white"){
            echo '<nav class="navbar navbar-expand-lg navbar-light bg-lightcustom fixed-top">';
            echo '<a class="navbar-brand" href="#"><img src="img/logo.png" /></a>';
        }
        else{
            echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">';
            echo '<a class="navbar-brand" href="#"><img src="img/logo2.png" /></a>';
        }
    ?>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>				
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
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