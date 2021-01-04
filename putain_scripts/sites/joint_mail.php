<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php
		require('config.php');
		if (isset($_REQUEST['mail'])){
			// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
			$mail = stripslashes($_REQUEST['mail']);
			$mail = mysqli_real_escape_string($conn, $mail); 			
			//requéte SQL + mot de passe crypté
		    $query = "INSERT into `join_mail` (mail) VALUES ('$mail')";
			// Exécute la requête sur la base de données
		    $res = mysqli_query($conn, $query);
		    if($res){
		       echo "<div class='sucess'>
		             <h3>Joindre le groupe avec succès.</h3>
		             <p>Cliquez ici pour vous <a href='index.php'>connecter</a></p>
					 </div>";
		    }
		}?>
</body>
</html>