<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php
		require('config.php');
		if (isset($_REQUEST['name'], $_REQUEST['phone'], $_REQUEST['mail'],$_REQUEST['mesaages'])){
			// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
			$name = stripslashes($_REQUEST['name']);
			$name = mysqli_real_escape_string($conn, $name); 
			// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
			$phone = stripslashes($_REQUEST['phone']);
			$phone = mysqli_real_escape_string($conn, $phone);
			// récupérer le email et supprimer les antislashes ajoutés par le formulaire
			$mail = stripslashes($_REQUEST['mail']);
			$mail = mysqli_real_escape_string($conn, $mail);
			// récupérer le mesaages  et supprimer les antislashes ajoutés par le formulaire
			$mesaages = stripslashes($_REQUEST['mesaages']);
			$mesaages = mysqli_real_escape_string($conn, $mesaages);
			//requéte SQL + mot de passe crypté

		    $query = "INSERT into `commentaire_mail` (name, phone, mail, mesaages)
		              VALUES ('$name','$phone', '$mail','$mesaages')";
			// Exécute la requête sur la base de données
		    $res = mysqli_query($conn, $query);
		    if($res){
		       echo "<div class='sucess'>
		             <h3>Message envoyé avec succès.</h3>
		             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
					 </div>";
		    }
		}?>
</body>
</html>