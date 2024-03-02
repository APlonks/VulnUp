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
	<link rel="stylesheet" type="text/css" href="../CSS/style_index.css">
	<title>Home</title>
    </head>
   <body>
	   <?php
			require("banner.php");
	   ?>
	   <div class="container">
		   <div>
				<span class="auto-word"></span>
		   </div>
		   <div class="presentation-site">
				<p>This lab has been developed to better understand how the Blind XSS attack works. <br>
				This attack consists of exploiting the stored XSS flaw and occurs mainly in :<br>
				</p>
				<ul>
					<li>Chat applications</li>
					<li>Forum</li>
					<li>Comment areas</li>
				</ul>
				<p>Using your knowledge and the XSS Hunter <a class="link-xss-hunter" href="https://xsshunter.com/" target="_blank">website</a>, this lab will give you more insight into the usefulness of this attack by applying it.</p>
		   </div>
		   <form method="post">
				<button type="submit" name="refresh" class="bouton-refresh">REFRESH</button>
			</form>
	   </div>
    </body>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script>
		var word = new Typed(".auto-word",{
			strings: ["BIENVENUE","WELCOME","WILLKOMMEN"],
			typeSpeed: 100,
			backSpeed: 100,
			loop: true
		})
	</script>
</html>

<?php 
	if(isset($_POST['refresh'])){    // If the user clicked on refresh, we refresh the DB
		shell_exec('php ../INIT/refresh.php');    // Refresh the DB
		header('Location: index.php');    // Refresh the page
	}
?>
