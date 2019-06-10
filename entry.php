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

        <!-- form -->
            <form name="entry_form" id="entry_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <fieldset class="border border-dark rounded m-2 px-4 py-2 bg-light"> 
                <legend class="text-dark">Create an Entry for Today</legend>
                    
                    <!-- Error List -->
                    <p class="errors"></p>

                        <fieldset class="border border-secondary rounded p-2 mb-4 shadow bg-white">
                        <legend class="text-secondary">Free Write</legend>

                            <!-- Free Write Here -->
                            <div class="form-group">
                                <label for="free_write" class="ml-4">A space for you to write as little or as much as you like.</label>
                                <br>
                                <textarea id="free_write" name="free_write" class="form-control lg-input mx-4 pr-4" rows="7"></textarea>
                                <br><br>
                            </div>

                        </fieldset>

                        <fieldset class="p-2 mb-4 border border-secondary rounded shadow bg-white">
                        <legend class="text-secondary">Mood</legend>
            
                            <!-- Mood Slider -->
                            <div class="form-group">
                                <label class="ml-4" for="slider">How do you feel right now?</label>
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
                                <div id="slider" name="slider" class="mx-4 ui-widget-overlay lg-input"></div>
                                <br><br>
                            </div>
                        
                        </fieldset>

                        <fieldset id="tag_bullets" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                        <legend class="text-secondary">What did you do today?</legend>

                            <!-- Tags/Bullets -->
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

                        
                        <fieldset id="tcinfo" class="p-2 border border-secondary rounded mb-4 shadow gradient-background">
                        <legend class="text-secondary">Anxiety or Panic</legend>

                             <div class="pb-3 ml-4">
                            <label for="tcbox" id="tc">Did you experience anxiety or panic today?</label>
                            <p class="text-primary font-italic">
                            It doesn't have to be a full-blown attack, maybe you just didn't feel safe today.
                            </p>
                            </div>
                            

                        </fieldset>
                        
                        <!-- Submit Button -->
                        <p class="my-4">
                        <input type="submit" id="submit_entry" value="Submit" class="btn btn-outline-primary shadow" disabled>
                        </p>

                </fieldset>

            </form>

        </div> <!-- end div containing form -->

    </div> <!-- end container class div -->

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- <script src="js/jquery-3.3.1.min.js"></script>  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src='js/jrnl.js'></script>

    <script>
        $(function () {
            $("#slider").slider();
        });

        $("#slider").on("slidechange", function (event, ui) {
            console.log($(this).slider("option", "value"));
        });
    </script>

</body>
</html>