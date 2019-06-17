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



    <title>Read Anixiety/Panic Attack Events</title>
</head>
<body>

    <div class='containter'>

        <!-- div -->
        <div class='col-sm-9 center'>

            <!-- navbar -->
            <?php require_once 'inc/navbar.inc.php' ?>

            <!-- sql innards -->
            <?php require_once 'inc/content/entry.inc.php' ?>

            

            <div class="wh-bkgd pt-2">


            <?php

                $email = $_SESSION['email'];
                
                $sql = "SELECT * FROM `user` WHERE email='$email'";
                $result = $db->query($sql) or die($db->error);
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['user_id'];
                    echo "<div class='h1 text-center'><a href ='".$_SERVER['PHP_SELF']."' alt='Return to all entries'>";
                    echo "<span class='small pr-1'>". $row['first_name'] . "'s </span>";
                    echo "<span class='gfont'>Jrnl</span>";
                    echo "<span class='small'> Anixety/Panic Event Entries</span>";
                    echo "</a></div>";
                }; // end while

                if (isset($_GET['tag'])) {
                    $get_tag = $_GET['tag'];
                    $sql_event = "SELECT * FROM `event` AS evt 
                            INNER JOIN `event_location_tag` 
                            ON evt.event_id = event_location_tag.event_id 
                            INNER JOIN `location_tag` 
                            ON location_tag.location_tag_id = event_location_tag.event_location_tag_id  
                            WHERE user_id='$user_id' 
                            AND location_tag.location_tag_id='$get_tag' 
                            ORDER BY evt.event_id 
                            DESC";
                } else {
                    $sql_event = "SELECT * FROM `event` 
                              WHERE user_id='$user_id' 
                              ORDER BY `event_id` 
                              DESC";
                };
                $result_event = $db->query($sql_event) or die($db->error);
                while ($row = $result_event->fetch_assoc()) {
                    $event_id = $row['event_id'];
                    echo "<fieldset class='border border-dark rounded m-2 px-4 py-2 shadow bg-light'>";
                    echo "<legend class='text-info'>";
                    echo date('d M Y',strtotime($row['date']));
                    if ($row['event_time'] != 0){
                        echo "<span class='text-dark'> at </span><span class='text-success'>".date('h:i a', strtotime($row['event_time']))."</span>";
                    }; // end if
                    echo "</legend>";

                    echo "<div class='row my-4'>";

                    echo "<div class='col-xl-9'>";
                    echo "<span class='text-info mr-4 h5'>Location Tags:</span>";          
                    $sql_location_tags = "SELECT `location_tag`,`event_location_tag_id`   
                                FROM  `location_tag` 
                                INNER JOIN `event_location_tag` 
                                ON location_tag.location_tag_id = event_location_tag.event_location_tag_id 
                                WHERE event_location_tag.event_id = ".$event_id;

                    $result_location = $db->query($sql_location_tags);

                    while ($row2= $result_location->fetch_assoc()) {
                        $location_tag = $row2['location_tag'];
                        $location_tag_id = $row2['event_location_tag_id'];
                        echo "<a class='btn btn-outline-info display-tags mr-2 mb-2' href='".$_SERVER['PHP_SELF']."?tag={$location_tag_id}'>".$location_tag."</a>";
                    } // end while
                    

                    // while ($row = $result_location->fetch_assoc()) {
                    //     $location_tag = $row['location_tag'];
                    //     echo "<span class='display-tags mr-2'>".$location_tag."</span>";
                    // }; // end while
                    


                    echo "</div>"; // end col
                    echo "<div class='col-xl-3'>";

                    echo "<span class='text-info mr-4 h5'>Intensity: </span><br>";
                    $intensity = $row['anxiety_level'];
                    if ($intensity != 0) {
                        if ($intensity = 1) {
                            echo "<span class='h5 text-secondary'>A Little Stressful</span>";
                        } elseif ($intensity = 2) {
                            echo "<span class='h5 text-secondary'>Somewhat Stressful</span>";
                        } elseif ($intensity = 3) {
                            echo "<span class='h5 text-secondary'>Very Stressful</span>";
                        }; // end if/elseif
                    }; // end if intesity

                    echo "</div>"; // end col

                    echo "</div>"; // end row

                    echo "<div class='border rounded border-info p-4 mb-4 bg-white'>";
                    echo $row['notes'];
                    echo "</div>";

                    echo "<a href='inc/content/delete/delete-event.inc.php?id={$row['event_id']}' onclick='return confirm(\"Are you sure you want to delete this?\");'><button type='button' class='custom-delete ml-4 mb-4'>Delete</button></a>";

                    echo "</fieldset>";
                }; // end while

            ?>

            </div> <!-- end div setting background color class-->
    
        </div> <!-- end div col-sm-8 -->

        <!-- footer -->
        <?php require_once 'inc/footer.inc.php' ?>
    
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