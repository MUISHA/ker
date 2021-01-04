<?php
    // Initialiser la session
    session_start();
    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["username"])){
        header("Location:index_1.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
            <title>KivuEmergenyRelief</title>
            <link rel="icon" type="image/png" href="images/nature_logo_2019.jpg" sizes="32x32">
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    </header>
           
    <body>
        <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
        <p>C'est votre tableau de bord.</p>
        <!--
            <h3 ><a href="logout.php">Déconnexion</a> <br></h3>
         -->
               
         <h3 ><a href="index_1.php">Acceder</a> <br></h3>
       
    </body>
</html>