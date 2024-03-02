<?php session_start(); ?>

<!DOCTYPE html>
<html lang="FR">
	<head>
		<meta charset="utf-8">
		<title>Log in</title>
		<link rel="stylesheet" href="../CSS/style_login.css" type="text/css"></link>
	</head>
	<body>
		<section>
		<div class="page_connexion">
			<h1>VulnUp</h1>

			<form method="post">
				<div class="header_connexion">
					<a href="index.php"><img class="logo" src="../images/UniversiteParis_monogramme_noir.jpg"></a>
					<h1> LOG IN </h1>
				</div>
				<input type="name" name="name" id="name" placeholder="username" required>
				<br>
				<input type="password" name="password" id="password" placeholder="password" required>
				<br>
				<input type="submit" name="formlogin" id="formlogin" value="Log in">
			</form>
		</div>
		</section>

		<?php include 'login_back.php' ?>
		
	</body>
</html>