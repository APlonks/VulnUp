<div class=bandeau>
    <div class="titre">
        <div class="text-titre" >VulnUp</div>
    </div>
    <nav>
        <div class="onglets">
            <a href="index.php"><img class="logo" src="../images/UniversiteParis_monogramme_noir-removebg-bord.png"></a>
            <a href="index.php">HOME</a>
            <a href="forum.php">FORUM</a>
            <?php  if(isset($_SESSION['Nom'])) { 
                if ($_SESSION['Nom'] == "admin"){?>
                    <a href="adminForum.php">FORUM MANAGEMENT</a>
                    <a href="contraintes.php">CONSTRAINTS</a>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="Connexion-Deconnexion">
            <?php  if(!isset($_SESSION['Nom'])) { ?>
                    <a class="bouton_onglet_menu" href="login.php">LOG IN</a>
                <?php }else{ ?>
                    <a class="bouton_onglet_menu" href="deconnexion.php" id="bouton_inscription">LOGOUT</a>
                <?php } 
            ?>
        </div>
    </nav>
</div>