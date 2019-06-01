<?php 
// session_start(); 
?>

<? require_once 'inc/content/login-modal.inc.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <title>Welcome to Jrnl</title>
</head>
<body>
    <div class="container">

        <!-- navigation bar -->
        <?php require_once 'inc/navbar.inc.php' ?>
        <!-- front content -->
        <?php require_once 'inc/content/front-content.inc.php' ?>

    </div> <!-- end container class div -->
    


    <!-- javascript -->
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src='js/jrnl.js'></script>
</body>
</html>