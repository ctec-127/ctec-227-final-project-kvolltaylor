<div class="col-sm-12 wh-bkgd">
    <div class="pb-4 row">
        <div class="my-4 text-center col-sm-12">
            <h1 class="display-2">Welcome to <span class="gfont">Jrnl</span></h1>
            <h2>A place to keep a daily bullet journal</h2>
            <h2>Track your anxiety and panic attacks</h2>
        </div>
    </div>

    <div id="front_main" class="row border border-secondary rounded mt-4 mx-4">
        <div class="col m-4 btn btn-outline-info p-4 text-center">
            <a href='#' id="fp_btn_1" class='nude_link' data-toggle="modal" data-target="#login_entry">
                <div class='nude_link py-2'><h3>Already have a Jrnl?</h3></div>
                <div class='nude_link py-2'>Click here to sign in</div>
            </a>
        </div>

        <!-- modal login -->
        <?php require_once 'login-modal.inc.php' ?>

        <div class="col m-4 btn btn-outline-primary p-4 text-center">
            <a href='register.php' class='nude_link' id="fp_btn_2">
            <div class='nude_link py-2'><h3>New to Jrnl?</h3></div>
            <div class='nude_link py-2'>Click here to sign up for your own Jrnl</div>
            </a>
        </div>
    </div>
    <!-- quotes -->
    <div id="quote_jumbotron" class="center">
        <div class="jumbotron center gradient-background-2 mb-4 d-none d-lg-inline-block">
            <div id="quotes" class="pointer">
            </div>
        </div>
    </div>
</div>

<script> 

      // js function to show or hide the user's password in modal popup
      function showPassword2() {
        
        let passwordField2 = document.getElementById('pw_login_2');
        let showPassword2 = document.getElementById('showPassword2');
        
        if (showPassword2.innerHTML === 'Show Password') {
            showPassword2.innerHTML = 'Hide Password';
            passwordField2.type = 'text';
        } else if (showPassword2.innerHTML === 'Hide Password') {
            passwordField2.type = 'password';
            showPassword2.innerHTML = 'Show Password';
        }
       
      }; // end showPassword function

</script>

