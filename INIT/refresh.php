<?php

require('DBconnection.php');

$create_messages = $bdd->prepare('CREATE TABLE messages ( id INTEGER PRIMARY KEY, title VARCHAR(255) NOT NULL, body TEXT NOT NULL)');

$create_messages->execute();

$create_users = $bdd->prepare('CREATE TABLE users ( id INTEGER PRIMARY KEY, name VARCHAR(255) NOT NULL, mp VARCHAR(255) NOT NULL, rights BOOLEAN)');

$create_users->execute();

$accounts = $bdd->prepare('INSERT INTO users values("1","admin","admin","1")');

$accounts->execute();

$accountUser = $bdd->prepare('INSERT INTO users values("2","user","user","0")');

$accountUser->execute();

?>