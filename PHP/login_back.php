<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$path = __DIR__ . '/../INIT/database.sqlite';
		$bdd = new PDO("sqlite:$path");
		var_dump($bdd);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		var_dump($bdd);
	}
	if(isset($_POST['formlogin'])){
		$name = htmlspecialchars($_POST['name']);
		$mp =$_POST['password'];
		if(!empty ($name) && !empty($mp)){
			$q = $bdd->prepare("SELECT * FROM users WHERE name = :name");
			$q -> execute(['name' => $name]);
			$result = $q -> fetch();			
			if($result==true){
				if ($mp == $result['mp']) {
					$_SESSION['name'] = $result['name'];
					$_SESSION['Droit'] = $result['rights'];
					$_SESSION['HashMP'] = $result['mp'];
					$_SESSION['Anti-script'] = 0;
					$_SESSION['Anti-tags'] = 0;
					$_SESSION['Anti-events'] = 0;
					header('Location: ../PHP/forum.php');
					exit();
				}
				else{
					?>
					<script type="text/javascript">alert("The name exists but the password is not valid.");</script> 
					<?php
				}
			}
			else{
				?>
				<script type="text/javascript">alert("The name does not exist in the database.");</script> 
				<?php
			}
		}
		else 
		{
			?>
			<script type="text/javascript">alert("The name or password is not filled in.");</script> 
			<?php
		}
	}
?>