<?php include 'head.inc.php'; ?>
<div class="header_top">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <br><br><br><br>
                <h1 class="nameP">Aymeric Sudre</h1>
                <div class="textP" >Technicien Supérieur en Informatique</div>
            </div>
        </div>
    </div>
</div>
<section id="stuck_container">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h1 class="logo">
                    <a href="index.php">
                        Portfolio
                    </a>
                </h1>
                <br><br>
                <div class="navigation">
                    <nav>
                        <ul class="sf-menu">
                            <li class="<?= ($_SERVER['SCRIPT_NAME'] == '/portfolio/index.php') ? 'current' : ''; ?>"><a href="index.php">Accueil</a></li>
                            <li class="<?= ($_SERVER['SCRIPT_NAME'] != '/portfolio/index.php' && $_SERVER['SCRIPT_NAME'] != '/portfolio/numresp.php' && $_SERVER['SCRIPT_NAME'] != '/portfolio/apropos.php' && $_SERVER['SCRIPT_NAME'] != '/portfolio/contacts.php') ? 'current' : ''; ?>"><a href="projets.php">Projets</a></li>
                            <li class="<?= ($_SERVER['SCRIPT_NAME'] == '/portfolio/numresp.php') ? 'current' : ''; ?>"><a href="numresp.php">Green IT</a></li>
                            <li class="<?= ($_SERVER['SCRIPT_NAME'] == '/portfolio/apropos.php') ? 'current' : ''; ?>"><a href="apropos.php">À propos</a></li>
                            <li class="<?= ($_SERVER['SCRIPT_NAME'] == '/portfolio/contacts.php') ? 'current' : ''; ?>"><a href="contacts.php">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>
