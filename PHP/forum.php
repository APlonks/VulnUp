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
    <title>FORUM</title>
</head>
<body>
    <?php
        if(isset($_SESSION['name'])){
            
            if($_SESSION['Anti-script'] == 1){
                if(isset($_POST['send-message'])){
                    $_list = array("<script>","</script>");
                    $_POST['body'] = strtolower($_POST['body']);
                    $_POST['body'] = str_replace($_list,'',$_POST['body']);
                }
            }

            if($_SESSION['Anti-tags'] == 1){
                if(isset($_POST['send-message'])){
                    $spam_words = file('../Appendices/list_tags.txt', FILE_IGNORE_NEW_LINES);
                    if (strpos($_POST['body'],"<body") ===false ){
                        foreach ($spam_words as $words ){
                            if ($words !== "body"){
                                $words1 = "<".$words;
                                $_POST['body'] = str_replace($words1,'/',$_POST['body']);
                                $words2 = "</".$words;
                                $_POST['body'] = str_replace($words2,'/',$_POST['body']);
                            }
                        }
                    }
                }
            }

            if($_SESSION['Anti-events'] == 1){
                if(isset($_POST['send-message'])){
                    $spam_words = file('../Appendices/list_events.txt', FILE_IGNORE_NEW_LINES);
                    if (strpos($_POST['body'],"onresize") ===false ){  
                        foreach ($spam_words as $words ){
                            if ($words != "onresize"){
                                $words1 = $words;
                                $_POST['body'] = str_replace($words1,'/',$_POST['body']);
                                $words2 = $words;
                                $_POST['body'] = str_replace($words2,'/',$_POST['body']);
                            }
                        }
                    }
                }
            }

        }

        require("banner.php");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $path = __DIR__ . '/../INIT/database.sqlite';
            $pdo = new PDO("sqlite:$path");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $pdo->prepare('INSERT INTO messages (title, body) VALUES (?, ?)')
                ->execute([$_SESSION['name'], $_POST['body']]);
        }
        if(isset($_POST['submit'])){
            header('Location: '.$_SERVER['PHP_SELF']);
            exit();
        }

    ?>

    <?php
        $path = __DIR__ . '/../INIT/database.sqlite';
        $pdo = new PDO("sqlite:$path");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $query = $pdo->prepare('SELECT * FROM messages');
        $result = $query->execute();
        $messages = $query->fetchAll();
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
    
        <?php  if(isset($_SESSION['name'])) { ?>
            <div class="nouveau-message">
                <div class="auteur">
                    <?php
                    if ($_SESSION['name'] === "admin"){
                        ?><img class="icon" src="../images/admin_icon.png" alt="admin icon"><?php
                    }else {
                        ?><img class="icon" src="../images/user_icon.png" alt="user icon"><?php
                    }
                    ?>
                    <div class="account-name"><?= $_SESSION['name']?></div>
                </div>
                <div class="contenu">
                    <form method="post">
                        <p>
                            <textarea class=textarea name="body"></textarea>
                        </p>
                        <p>
                            <button name="send-message" class="bouton-message" type="submit">Submit</button>
                        </p>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>

</body>
</html>