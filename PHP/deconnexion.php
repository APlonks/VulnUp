<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>HEEEEEELLLLLLLOOOOOOOO</p>
</body>
</html>

<?php  
session_start();	//On récupère la session en cours
$_SESSION = array();	//On vide les variables de session, à vérifier si on ne met pas dans un tableau
session_destroy();	//Destructiond de la session
header("Location: index.php"); //redirection vers la page d'accueil
?>