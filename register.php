<?php session_start(); ?>

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


    <title>Register Here</title>
</head>
<body>

    <div class='containter'>

        <!-- div -->
        <div class='col-sm-9 center'>

        <!-- navbar -->
        <?php require_once 'inc/navbar.inc.php' ?>

        <div class="wh-bkgd pt-2">

            <!-- sql innards -->
            <?php require_once 'inc/content/register.inc.php'?>

            <?php if ($_SERVER['REQUEST_METHOD']!="POST") { ?>

            <!-- form -->
                <form name="register_form" id="register_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                    <fieldset class="border border-dark rounded m-2 px-4 py-2 bg-light"> 
                    <legend class="text-dark">Register</legend>

                        <p class="text-danger h5 mb-4 pl-2">All fields are required</p>
                        
                        <!-- Error List -->
                        <p class="errors"></p>

                            <fieldset class="border border-secondary rounded p-2 mb-4 shadow bg-white">
                            <legend class="text-secondary">Name</legend>

                                <!-- First Name -->
                                <label for="first" class="ml-4">First Name</label>
                                <br>
                                <input type="text" id="first" name="first" maxlength="20" class="ml-4">
                                <br><br>
                                
                                <!-- Last Name -->
                                <label for="last" class="ml-4">Last Name</label>
                                <br>
                                <input type="text" id="last" name="last" maxlength="20" class="ml-4">
                                <br><br>
                                
                            </fieldset>

                            <fieldset class="p-2 mb-4 border border-secondary rounded shadow bg-white">
                            <legend class="text-secondary">Email</legend>
                
                                <!-- Email -->
                                <label class="ml-4" for="email" >Address</label>
                                <br>
                                <input class="ml-4" type="email" name="email" id="email" maxlength="150">
                                <br><br>
                            
                            </fieldset>

                            <fieldset id="orderinfo" class="p-2 border border-secondary rounded mb-4 shadow bg-white">
                            <legend class="text-secondary">Password</legend>

                                <!-- Password -->
                                <p class='ml-4 text-primary font-italic'>
                                    Create a password between 8 and 30 characters long
                                </p>
                                <label for="pw" class="ml-4">Password</label>
                                <a id="showPassword2" class="pw_show font-italic ml-2" onclick="showPassword2();">Show Password</a>
                            <br>
                                <br>
                                <input type="password" id="pw" name="pw" minlength='8' maxlength="100" class="ml-4">
                                <br><br>
                                <label for="pw_verify" class="ml-4">Verify Password</label>
                                <a id="showPassword3" class="pw_show font-italic ml-2" onclick="showPassword3();">Show Password</a>
                            <br>
                                <br>
                                <input type="password" id="pw_verify" name="pw_verify" minlength='8' maxlength="100" class="ml-4">
                                <br><br>

                            </fieldset>

                            
                            <fieldset id="tcinfo" class="p-2 border border-secondary rounded mb-4 shadow gradient-background">
                            <legend class="text-secondary">Terms and Conditions</legend>

                                <!-- modal link -->
                                <div class="pb-3 ml-4">
                                    <a href class="text-primary font-italic underline_link" data-toggle="modal" data-target="#tc_text">
                                    Read terms and conditions
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
                                                <!-- Legal mumbojumbo was generated using http://legalipsum.com/ -->
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
                                
                                <!-- Terms and Conditions -->
                                <label for="tcbox" class="ml-4" id="tc">Do you accept our terms and conditions?</label>
                                <br>
                                <input type="checkbox" name="tcbox" id="tcbox" value="yes" class="ml-4 mr-2">I accept

                            </fieldset>
                            
                            <!-- Submit Button -->
                            <p class="my-4">
                            <input type="submit" value="Submit" class="btn btn-outline-primary shadow" disabled>
                            </p>

                    </fieldset>

                </form>

            <?php }; ?>

            <!-- footer -->
            <?php require_once 'inc/footer.inc.php' ?>

            </div> <!-- end div setting background color class -->
            
        </div> <!-- end div containing form -->

    </div> <!-- end container class div -->

    <!-- javascript -->
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src='js/jrnl.js'></script>

    <script>
        // js function to show or hide the user's password on register page
        function showPassword2() {
            let passwordField = document.getElementById('pw');
            let showPassword = document.getElementById('showPassword2');
        
            if (showPassword.innerHTML === 'Show Password') {
                showPassword.innerHTML = 'Hide Password';
                passwordField.type = 'text';
            } else if (showPassword.innerHTML === 'Hide Password') {
                passwordField.type = 'password';
                showPassword.innerHTML = 'Show Password';
            }
        }; // end showPassword2 function

        // js function to show or hide the user's password for verify
        function showPassword3() {
        let passwordField = document.getElementById('pw_verify');
        let showPassword = document.getElementById('showPassword3');
    
        if (showPassword.innerHTML === 'Show Password') {
            showPassword.innerHTML = 'Hide Password';
            passwordField.type = 'text';
        } else if (showPassword.innerHTML === 'Hide Password') {
            passwordField.type = 'password';
            showPassword.innerHTML = 'Show Password';
        }
        }; // end showPassword2 function
    </script>

</body>
</html>