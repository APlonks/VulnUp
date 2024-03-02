
<?php
$path = __DIR__ . '/database.sqlite';

if (file_exists($path)) unlink($path);

$bdd = new PDO("sqlite:$path");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>