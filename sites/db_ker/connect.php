<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection	
		try{
            // On se connecte à MySQL
            $conn = new mysqli('localhost','root','','db_kivuem');
        }catch(Exception $e){
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
        }
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
			$execval = $stmt->execute();
			echo $execval;
			echo "Registration successfully...";
			$stmt->close();
			$conn->close();
		}
?>