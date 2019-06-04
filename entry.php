<?php session_start(); ?>

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
        <?php require_once 'inc/entry.inc.php'?>

        <!-- form -->
            <form name="entry_form" id="entry_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <fieldset class="border border-dark rounded m-2 px-4 py-2 bg-light"> 
                <legend class="text-dark">Create an Entry for Today</legend>
                    
                    <!-- Error List -->
                    <p class="errors"></p>

                        <fieldset class="border border-secondary rounded p-2 mb-4 shadow bg-white">
                        <legend class="text-secondary">Free Write</legend>

                            <!-- Free Write Here -->
                            <label for="free_write" class="ml-4">A space for you to write as little or as much as you like.</label>
                            <br>
                            <textarea id="free_write" name="free_write" class="lg_text_input ml-4"></textarea>
                            <br><br>

                        </fieldset>

                        <fieldset class="p-2 mb-4 border border-secondary rounded shadow bg-white">
                        <legend class="text-secondary">Mood</legend>
            
                            <!-- Mood Slider -->
                            <label class="ml-4" for="slider">How do you feel right now?</label>
                            <br>
                            <div class="row px-4 mx-4 my-4 text-secondary">
                                <div class="col-3">
                                    <i class="far fa-sad-tear d-inline fa-3x"></i>
                                </div>
                                <div class="col-3 mx-4">
                                    <i class="far fa-meh-blank d-inline fa-3x"></i>
                                </div>
                                <div class="col-3 mx-4">
                                    <i class="far fa-grin d-inline fa-3x"></i>
                                </div>
                                <div class="col-1">
                                    <i class="far fa-angry d-inline fa-3x"></i>
                                </div>
                            </div>
                            <div id="slider" name="slider" class="mx-4 ui-widget-overlay"></div>
                            <br><br>
                        
                        </fieldset>

                        <fieldset id="orderinfo" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                        <legend class="text-secondary">What did you do today?</legend>

                            <!-- Password -->
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
                            <input type="text" id="tags" name="tags" class="sm_text_input ml-4">
                            <br><br>

                        </fieldset>

                        
                        <fieldset id="tcinfo" class="p-2 border border-secondary rounded mb-4 shadow gradient-background">
                        <legend class="text-secondary">Anxiety or Panic</legend>

                            <!-- modal link -->
                            <div class="pb-3 ml-4">
                                <!-- Terms and Conditions -->
                            <label for="tcbox" id="tc">Did you experience anxiety or panic today?</label>
                            <p class="text-primary font-italic">
                            It doesn't have to be a full-blown attack, maybe you just didn't feel safe today.
                            </p>
                            <input type="checkbox" name="tcbox" id="tcbox" value="yes" class="ml-4 mr-2">I accept
                                <a href class="text-primary font-italic underline_link" data-toggle="modal" data-target="#tc_text">
                                PLACESAVER TEXT FOR A BUTTON OF SOME SORT
                                </a>
                            </div>
                            <!-- modal pop-up -->
                            <div class="modal fade" id="tc_text" tabindex="-1" role="dialog" aria-labelledby="tc_textTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header gradient-background">
                                            <h5 class="modal-title" id="tc_textTitle">Terms and Conditions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Each Recipient is solely responsible for determining the appropriateness of using or selling of Modifications made by that Contributor with its distribution of this License, each Contributor harmless for any version ever published by the GNU Library General Public License applies to most effectively convey the exclusion of warranty; keep intact the notices that do not include additions to that Work or a Modified Version. Permissions for Redistribution of the Derived Work must provide new instructions on how to obtain the complete agreement concerning subject matter in Your Modifications, if you become the Current Maintainer of the Work or Derivative Works (as that term is defined in 48 C.F.R.)</p>
                                            <p>Agreement is invalid or unenforceable under any other provision. You may use the Work or that you cannot import information which is available under terms compatible with the source code. And you must (i) comply with any term(s) of this License will be useful, but WITHOUT ANY WARRANTY. A Package modified in accordance with FAR 12.211 (Technical Data) and 12.212 (Computer Software) and, for Department of Defense purchases, DFAR 252.227-7015 (Technical Data -- Commercial Items) and 227.7202-3 (Rights in Commercial Computer Software Documentation).</p>
                                            <p>Standard Version, under the terms of the software is covered only if the two goals of preserving the free software Package may be published from time to time. As a condition to exercising the rights granted by such Contributor by reason of any subsequent version of this test package and to related Covered Code. You must give the recipients may install the Licensed Program in a commercial product offering should do so only on Your own copyright statement to Your modifications and may be distributed and/or modified under the terms of Section 3.1-3.5 have been validly granted by this License; they are outside its scope.</p>
                                        </div>
                                        <div class="modal-footer gradient-background">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->

                        </fieldset>
                        
                        <!-- Submit Button -->
                        <p class="my-4">
                        <input type="submit" value="Submit" class="btn btn-outline-primary shadow" disabled>
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