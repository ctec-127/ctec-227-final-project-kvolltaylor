<?php

  require_once "db/mysqli_connect.inc.php";
  require_once "config/config.inc.php";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand ml-4" href="frontpage.php"><span class="gfont h1">Jrnl</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ml-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Jrnl</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="entry.php">Make an Entry</a>
                    <div class="dropdown-divider">
                    </div>
                    <a class="dropdown-item" href="#">Read my Entries</a>
                    <a class="dropdown-item" href="#">Read my Anxiety Entries</a>
                </div>
            </li>
        </ul>
    </div> <!-- end div navbar-collapse -->  
    <div class="nav navbar-nav navbar-right d-inline mr-4">
        <!-- LOGIN BUTTON -->
        <div class='d-inline'>
            <div id="login_section">
                <a href="#" id="nav_login" name="nav_login" class='text-secondary' data-toggle="modal" data-target="#login_entry"><i class="fas fa-sign-in-alt mx-2 text-success"></i>   Log In</a>
            </div>
        </div>

        <!-- modal login -->
        <?php require_once 'content/login-modal.inc.php' ?>

        <!-- LOGOUT BUTTON -->
        <div class='d-inline'>
            <div id="logout_section">
                <a href id="nav_logout" name="nav_logout" class='text-secondary logout'><i class="fas fa-sign-out-alt mx-2 text-info"></i>   Log Out</a>
            </div>
        </div>
    </div> <!-- end div navbar right -->
</nav>
  
<script> 

      // js function to show or hide the user's password in modal popup
      function showPassword() {
        
        let passwordField = document.getElementById('pw_nav');
        let showPassword = document.getElementById('showPassword');
        
        if (showPassword.innerHTML === 'Show Password') {
            showPassword.innerHTML = 'Hide Password';
            passwordField.type = 'text';
        } else if (showPassword.innerHTML === 'Hide Password') {
            passwordField.type = 'password';
            showPassword.innerHTML = 'Show Password';
        }
       
      }; // end showPassword function

</script>
