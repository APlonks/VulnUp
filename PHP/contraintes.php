<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style_bandeau.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_contraintes.css">
    <title>Constraints</title>
</head>
<body>
    <?php
        require("bandeau.php");
    ?>

    <div class="Description">
        <h2>Voici les différentes contraintes applicables</h2>
    </div>

    <div class="container-switch">
    <form action="./contraintes_back.php" method="post">
        
        <div class="button-explication">
            <label class="toggle">
                <?php 
                if($_SESSION['Anti-script']==1){
                    ?><input name="Anti-script" type="checkbox" value="1" checked><?php
                }else{
                    ?><input name="Anti-script" type="checkbox" value="1"><?php
                }?>
                <span class="circle"></span>
            </label>
            <div class="explication">
                <p class="texte-explication">Blocking the script tag</p>
            </div> 
        </div>

        <div class="button-explication">
            <label class="toggle">
                <?php 
                if($_SESSION['Anti-tags']==1){
                    ?><input name="Anti-tags" type="checkbox" value="1" checked><?php
                }else{
                    ?><input name="Anti-tags" type="checkbox" value="1"><?php
                }?>
                <span class="circle"></span>
            </label>
            <div class="explication">
                <p class="texte-explication">Blocking most tags</p>
            </div>
        </div>

        <div class="button-explication">
            <label class="toggle">
                <?php 
                if($_SESSION['Anti-events']==1){
                    ?><input name="Anti-events" type="checkbox" value="1" checked><?php
                }else{
                    ?><input name="Anti-events" type="checkbox" value="1"><?php
                }?>
                <span class="circle"></span>
            </label>
            <div class="explication">
                <p class="texte-explication">Blocking most events</p>
            </div>
        </div>
        
        <div class="container-button-envoie">
            <input class="button-envoie" type="submit" value="SAVE">
        </div>

    </div>   
    </form>
</body>
</html>