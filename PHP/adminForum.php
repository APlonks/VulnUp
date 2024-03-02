<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style_banner.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_forum.css">
    <title>Forum Management</title>
</head>
<body>
    <?php
        require("banner.php");

        $path = __DIR__ . '/../INIT/database.sqlite';
        $pdo = new PDO("sqlite:$path");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $query = $pdo->prepare('SELECT * FROM messages');
        $result = $query->execute();
        $messages = $query->fetchAll();
        // var_dump($query->fetchAll(), $result);
    ?>
    <div class="messages">
        <?php foreach ($messages as $message): ?>
            <div class="message">
                <div class="auteur">
                    <?php
                    if ($message['title'] === "admin"){
                        ?><img class="icon" src="../images/admin_icon.png" alt="admin icon"><?php
                    }else {
                        ?><img class="icon" src="../images/user_icon.png" alt="user icon"><?php
                    }
                    ?>
                    <div class="account-name"><?= $message['title']?></div>
                </div>
                <div class="contenu">
                    <?= $message['body'] ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>