<div class=banner>
    <div class="title">
        <div class="text-title" >VulnUp</div>
    </div>
    <nav>
        <div class="tabs">
            <a href="index.php"><img class="logo" src="../images/UniversiteParis_monogram_black-removebg-bord.png"></a>
            <a href="index.php">HOME</a>
            <a href="forum.php">FORUM</a>
            <?php  if(isset($_SESSION['name'])) { 
                if ($_SESSION['name'] == "admin"){?>
                    <a href="adminForum.php">FORUM MANAGEMENT</a>
                    <a href="constraints.php">CONSTRAINTS</a>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="connection-disconnection">
            <?php  if(!isset($_SESSION['name'])) { ?>
                    <a class="bouton_onglet_menu" href="login.php">LOG IN</a>
                <?php }else{ ?>
                    <a class="bouton_onglet_menu" href="disconnection.php" id="bouton_inscription">LOGOUT</a>
                <?php } 
            ?>
        </div>
    </nav>
</div>