<?php

  require_once "db/mysqli_connect.inc.php";
  require_once "config/config.inc.php";
  // require_once "content/login-modal.inc.php";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand ml-4" href="frontpage.php"><span class="gfont h1">Jrnl</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ml-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Jrnl
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="entry.php">Make an Entry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Read my Entries</a>
          <a class="dropdown-item" href="#">Read my Anxiety Entries</a>
        </div>
      </li>
    </ul>
    <!-- LOGIN BUTTON -->
    <ul class="nav navbar-nav navbar-right d-inline mr-4">
      <li class='d-inline'>
          <div id="login">
            <a href="#" id="nav_login" name="nav_login" class='text-secondary' data-toggle="modal" data-target="#login_entry"><i class="fas fa-sign-in-alt mx-2 text-success"></i>   Log In</a>
          </div>
          </li>

      <!-- modal pop-up for login email and password -->
      <div class="modal fade" id="login_entry" tabindex="-1" role="dialog" aria-labelledby="login_entryTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header gradient-background">
                    <h5 class="modal-title" id="login_entryTitle">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cancel">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                  <div class="modal-body">
                      <fieldset class="border border-secondary rounded px-2 pt-2 pb-4 mb-4 shadow bg-white">
                      <legend class="text-secondary">Enter your email & password:</legend>
                      <div class="px-4">
                      <!-- begin form -->
                      <form name="login_popup" id="login_popup" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <label for="email_nav">Email</label>
                        <br>
                        <input type="email" name="email" id="email_nav" placeholder="name@email.com" required>
                        <br><br>
                        <label for="pw_nav">Password</label>
                        <a href="#" id="showPassword" class="font-italic ml-2" onclick="showPassword();">Show Password</a>
                        <br>
                        <input type="password" name="pw" id="pw_nav" placeholder="password" required>
                      </div>
                      
                    </fieldset>   
                  </div>
                  <div class="modal-footer gradient-background">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" id="submit" class="btn btn-secondary login" >Submit</button>
                  </div>
                      <!-- end form -->
                      </form>
            </div>
        </div>
      </div>
      </form>
      <!-- end modal -->

      <!-- LOGOUT BUTTON -->
      <li class='d-inline'>
          <a href id="nav_logout" name="nav_logout" class='text-secondary logout'><i class="fas fa-sign-out-alt mx-2 text-info"></i>   Log Out</a>
      </li>
    </ul>
  </div>
  
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


<!-- <script>
    // function to collect data from modal form as ajax to move to php
    // function submitForm(){
    //     $.ajax({
    //       type: 'POST',
    //       url: 'inc/content/session-backend.inc.php',
    //       cache: false,
    //       data: $('form#login_popup').serialize(),
    //       success: function(response){
    //         console.log(response);
    //       },
    //       error: function(){
    //         console.log("Error with submitForm function");
    //       }
    //     });
    //   }

      // $("form").on("submit", function(event) {
      //   event.preventDefault();
      //   console.log($(this).serialize());
      // });

        // var form = $(this).attr("action");
        // var email = $('#email_login').val();
        // var pw = $('#pw_login').val(); 

        // console.log(email);
        // console.log(pw);

        // var email = formData.get('#email_login');
        // var pw = formData.get('#pw_login');
        
        // $.ajax({
        //   url : 'inc/content/session-backend.inc.php', 
        //   type : 'POST',
        //   dataType : 'json',
        //   data : {'email_login':email, 'pw_login':pw},
        //   success : function(data){
        //     console.log('Submission was successful');
        //     console.log(data);},
        //   error : function(data){
        //     console.log('An error occurred');
        //     console.log(data);}
        // });
  


  </script> -->
 
</nav>