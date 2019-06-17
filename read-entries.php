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
            <?php require_once 'inc/content/entry.inc.php' ?>

            <!-- php functions -->
            <?php require_once 'inc/functions/functions.inc.php' ?>

            <div class="wh-bkgd pt-2">


            <?php

                $email = $_SESSION['email'];
                
                $sql = "SELECT * FROM `user` WHERE email='$email'";
                $result = $db->query($sql) or die($db->error);
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                    echo "<div class='h1 text-center'><span class='small pr-1'>". $row['first_name'] . "'s </span><span class='gfont'>Jrnl</span><span class='small'> entries</span></div>";
                }; // end while

                $sql = "SELECT * FROM `entry` WHERE user_id='$user_id' ORDER BY `entry_id` DESC";
                $result_entry = $db->query($sql) or die($db->error);
                while ($row = $result_entry->fetch_assoc()) {
                    $entry_id = $row['entry_id'];
                    echo "<fieldset class='border border-dark rounded m-2 px-4 py-2 shadow bg-light'>";
                    echo "<legend class='text-info'>";
                    echo date('d M Y',strtotime($row['date']));
                    echo "</legend>";
                    echo "<div class='row'>";
                    echo "<div class='col-xl-2 col-md-4'>";
                    $mood = $row['mood'];
                    if ($mood != 0) {
                        echo "<div class='face'>";
                        if ($mood > 0 && $mood < 19) {
                            echo "<i class='far fa-sad-tear sad fa-9x rounded-circle p-2 bg-white border'></i>";
                        } elseif ($mood > 19 && $mood < 49) {
                            echo "<i class='far fa-meh-blank meh fa-9x rounded-circle p-2 bg-white border'></i>";
                        } elseif ($mood > 49 && $mood < 79) {
                            echo "<i class='far fa-grin grin fa-9x rounded-circle p-2 bg-white border'></i>";
                        } elseif ($mood > 79) {
                            echo "<i class='far fa-angry angry fa-9x rounded-circle p-2 bg-white border'></i>";
                        };
                        echo "</div>";
                    }else{
                        echo "<div class='noface'><i class='fas fa-exclamation-circle text-secondary fa-9x p-2'></i></div>";
                    }
                        // end if mood

                    echo "</div>"; // end col-3
                    echo "<div class='col-xl-10 col-md-8'>";
                    echo "<div class='border rounded border-info p-4 ml-4 bg-white'>";
                    echo $row['text'];
                    echo "</div>"; // end border div
                    echo "</div>"; // end col-9
                    echo "</div>"; // end row
                    echo "<div class='row my-4'>";
                    echo "<div class='col-xs-6 col-lg-8 col-xl-9'>";
                    echo "<span class='text-info mr-4 h5'>Bullet Tags:</span>";
                                
                    $sql_tags = "SELECT `tag`  
                                FROM  `tags` 
                                INNER JOIN `entry_tag` 
                                ON tags.id = entry_tag.tag_id 
                                WHERE entry_tag.entry_id = ". $entry_id;

                    $result = $db->query($sql_tags) or die($db->error);

                    while ($row2 = $result->fetch_assoc()) {
                        $tag = $row2['tag'];
                        echo "<span class='display-tags mr-2'>".$tag."</span>";
                    }; // end while

                    echo "</div>"; // end col-9
                    echo "<div class='col-xs-6 col-lg-4 col-xl-3 pt-2'>";
                    echo "<span class='text-info mr-4 h5'>Anxiety/Panic:</span>";
                    $apyn = $row['apyn'];
                    if ($apyn = 'y'){
                        echo "<span class='h5 text-secondary p-1 gradient-background-3'>Yes</span>";
                    } else if ($apyn = 'n'){
                        echo "<span class='h5 text-secondary p-1 gradient-background-3'>No</span>";
                    };

                    echo "</div>"; // end col-3
                    echo "</div>"; // end row

                    echo "</fieldset>";
                }
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