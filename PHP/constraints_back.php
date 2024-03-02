<?php

session_start();

if(isset($_POST['Anti-script'])){
    if ($_SESSION['Anti-script']==0){
        $_SESSION["Anti-script"] = 1;
    }
}else {
    $_SESSION["Anti-script"] = 0;
}

if(isset($_POST['Anti-tags'])){
    if ($_SESSION['Anti-tags']==0){
        $_SESSION["Anti-tags"] = 1;
    }
}else {
    $_SESSION["Anti-tags"] = 0;
}

if(isset($_POST['Anti-events'])){
    if ($_SESSION['Anti-events']==0){
        $_SESSION["Anti-events"] = 1;
    }
}else {
    $_SESSION["Anti-events"] = 0;
}

header('Location: ./constraints.php');

?>