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



    <title>Write an Entry</title>
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

                <!-- form -->
                <fieldset class="border border-dark rounded m-2 px-4 py-2 bg-light"> 
                <legend class="text-dark">Create an Entry for Today</legend>
                
                <form name="entry_form" id="entry_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        
                    <!-- Error List -->
                    <p class="errors"></p>

                    <!-- Free Write Here -->
                    <fieldset class="border border-secondary rounded p-2 mb-4 shadow bg-white">
                    <legend class="text-secondary">Free Write</legend>
                    <div class="form-group">
                        <label for="free_write" class="ml-4">A space for you to write as little or as much as you like.</label>
                        <br>
                        <textarea id="free_write" name="free_write" class="form-control lg-input mx-4 pr-4" rows="7"></textarea>
                        <br><br>
                    </div>

                    </fieldset>

                    <!-- Mood Slider -->
                    <fieldset class="p-2 mb-4 border border-secondary rounded shadow bg-white">
                    <legend class="text-secondary">Mood</legend>
                    <div class="form-group">
                        <label class="ml-4">How do you feel right now?</label>
                        <br>
                        <div class="row px-4 mx-4 my-4 text-secondary">
                            <div class="col-3">
                                <i class="far fa-sad-tear d-none d-xl-inline fa-3x"></i>
                            </div>
                            <div class="col-3 mx-4">
                                <i class="far fa-meh-blank d-none d-xl-inline fa-3x"></i>
                            </div>
                            <div class="col-3 mx-4">
                                <i class="far fa-grin d-none d-xl-inline fa-3x"></i>
                            </div>
                            <div class="col-1">
                                <i class="far fa-angry d-none d-xl-inline fa-3x"></i>
                            </div>
                        </div>
                        <div id="slider" class="mood-slider mx-4 ui-widget-overlay lg-input"></div>
                        <input type="hidden" name="mood" id="mood">
                        <br><br>
                    </div>
                    </fieldset>

                    <!-- Tags/Bullets -->
                    <fieldset id="tag_bullets" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                    <legend class="text-secondary">What did you do today?</legend>
                    <div class="form-group">
                        <p class="ml-4">
                            Choose some tags that reflect things you did or thought about.
                        </p>
                        <p class='ml-4 text-primary font-italic'>
                            For example, maybe you saw a movie. Add a "movie" tag.
                            <br>
                            Add as few or as many brief tags as you like, separated by a comma.
                        </p>
                        <label for="tags" class="ml-4">Tags</label>
                        <br>
                        <div class="ml-4">
                            <input type="text" data-role="tagsinput" id="tags" name="tags" class="form-control lg-input ml-4">
                        </div>
                        <br>
                    </div>
                    </fieldset>
                        
                    <!-- Anxiety/Panic Event -->
                    <fieldset id="anxietypanic" class="p-2 border border-secondary rounded mb-4 shadow gradient-background-3">
                    <legend class="text-dark">Anxiety or Panic</legend>
                    <div class="pb-3 ml-4">
                        <label>Did you experience anxiety or panic today?</label>
                        <p class="text-primary font-italic">
                            It doesn't have to be a full-blown attack, maybe you just
                            <br>
                            didn't feel safe at a moment when you think you should have.
                        </p>
                        <div class="form-group ml-1">
                            <div class="form-check-inline">
                                <input type="radio" id="apy" name="apyn" value="y"><label class="form-check-label" for="apy">Yes</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="apn" name="apyn" value="n" checked><label class="form-check-label" for="apn">No</label>
                            </div>
                        </div>
                        
                        <!-- button to hide/show form portion to enter anxiety/panic event info
                        <p><a class="btn btn-outline-success" data-toggle="collapse" href="#ap_entry" data-target="#ap_entry" role="button" aria-expanded="false" aria-controls="ap_entry" id="event_toggle">Add a Description</a></p> -->
                    </div>
                    

                        <!-- begin collapse -->       
                    <div id="ap_entry" class="collapse mr-4">
                            
                        <!-- Location Tags -->
                        <fieldset id="aplocation" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                        <legend class="text-dark glow">Location</legend>
                        <div class="form-group">
                            <p class="ml-4">
                                Add a tag or two about where you were when it happened
                            </p>
                            <p class="ml-4 text-primary font-italic">
                                For example, maybe you were at a friend's house and it was in the kitchen.
                                <br>
                                Add as few or as many location tags as you like, separated by a comma.
                            </p>
                            <label for="location_tags" class="ml-4">Location Tags</label>
                            <br>
                            <div class="ml-4">
                                <input type="text" data-role="tagsinput" id="location_tags" name="location_tags" class="form-control lg-input ml-4">
                            </div>
                            <br>
                        </div>
                        </fieldset>

                        <!-- time -->
                        <!-- w3 validator says the pattern for the time input is an error, but am following Mozilla's documentation and protocol -->
                        <fieldset id="aptime" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                        <legend class="text-dark glow">Time</legend>
                        <div class="form-group">
                            <label for="event_time" class="ml-4">Do you remember what time it happened?</label>
                            <br>
                            <div class="ml-4 sm-input">
                                <input type="time" id="event_time" name="event_time" pattern="[0-9]{2}:[0-9]{2}" class="form-control">
                            </div>
                            <br>
                        </div>
                        </fieldset>

                        <!-- intensity -->
                        <fieldset id="intense" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                        <legend class="text-dark glow">Intensity</legend>
                        <div class="form-group ml-4">
                            <?php 
                                $checked_1 = '';
                                $checked_2 = '';
                                $checked_3 = '';
                                if(isset($anxiety_level)){ 
                                    if ($anxiety_level == "1") {
                                        $checked_1 = ' checked';
                                    } else if ($anxiety_level == "2") {
                                        $checked_2 = ' checked';
                                    } else if ($anxiety_level == "3") {
                                        $checked_3 = ' checked';
                                    }
                                };
                            ?>
                            <div class="form-check-inline">
                                <input type="radio" id="ap_low" name="anxiety_level" value="1" <?=$checked_1?>><label class="form-check-label" for="ap_low">A Little Stressful</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="ap_med" name="anxiety_level" value="2" <?=$checked_2?>><label class="form-check-label" for="ap_med">Somewhat Stessful</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" id="ap_hi" name="anxiety_level" value="3" <?=$checked_3?>><label class="form-check-label" for="ap_hi">Very Stressful</label>
                            </div>
                        </div>
                        </fieldset>

                        <!-- notes -->
                        <fieldset class="border border-secondary rounded p-2 mb-4 shadow bg-white">
                        <legend class="text-dark glow">Notes</legend>
                        <div class="form-group">
                            <label for="notes" class="ml-4">A space for you to add any important notes you'd like to make.</label>
                            <br>
                            <textarea id="notes" name="notes" class="form-control lg-input mx-4 pr-4" rows="7"></textarea>
                            <br><br>
                        </div>
                        </fieldset>

                    </div> <!-- end collapse -->
                    </fieldset>
                        
                    <!-- Submit Button -->
                    <p class="my-4">
                    <input type="submit" id="submit_entry" value="Submit" class="btn btn-outline-primary shadow" disabled>
                    </p>

                </form> <!-- end form -->
                </fieldset> <!-- end fieldset for anxiety/panic event form -->

            </div> <!-- end div setting background color class-->

        </div> <!-- end second div containing navbar and form -->

    </div> <!-- end container class div -->

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="js/jrnl.js"></script>
    <script src="js/ui-slider.js"></script>


</body>
</html>