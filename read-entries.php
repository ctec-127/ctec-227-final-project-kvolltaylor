<?php session_start(); ?>

<?php 
    if (!isset($_SESSION['email'])) {
        header('Location: frontpage.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <title>Read Daily Entries</title>
</head>
<body>

    <div class='containter'>

        <!-- div -->
        <div class='col-sm-8 center'>

            <!-- navbar -->
            <?php require_once 'inc/navbar.inc.php' ?>

            <!-- sql innards -->
            <?php require_once 'inc/content/entry.inc.php'?>

            <div class="wh-bkgd pt-2">

            <?php

                $sql = "SELECT * FROM user";
                $result = $db->query($sql);
                while ($row = $result->fetch_assoc()) {
                    if ($_SESSION['email'] == $row['email']) {
                        $id = $row['user_id'];
                    }; // end if
                }; // end while
                
                $sql_entry = "SELECT * FROM `entry` WHERE user_id='$id'";
                $result = $db->query($sql_entry);
                while ($row = $result->fetch_assoc()) {
                    
                }; // end while


            ?>

            </div> <!-- end div setting background color class-->

        </div> <!-- end div col-sm-8 -->

    </div> <!-- end div containter-->

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="js/jrnl.js"></script>
    <script src="js/ui-slider.js"></script>

</body>
</html>