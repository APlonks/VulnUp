<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php  
session_start();    // Retrieve the current session
$_SESSION = array();    // Empty the session variables, to check if we don't put it in an array
session_destroy();    // Destroy the session
header("Location: index.php"); // Redirect to the homepage

?>