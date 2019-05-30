<?php
  require_once __DIR__ . "/../inc/db/mysqli_connect.inc.php";
  require_once __DIR__ . "/../functions/functions.inc.php";
  require __DIR__ . "/../inc/config/config.inc.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-4" href="frontpage.php"><span class="gfont h1">Jrnl</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ml-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Jrnl
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Make an Entry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Read my Entries</a>
          <a class="dropdown-item" href="#">Read my Anxiety Entries</a>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right d-inline mr-4">
      <li class='d-inline'>
          <a href="#" id="nav_login" name="nav_login" class='text-secondary' data-toggle="modal" data-target="#login_entry"><i class="fas fa-sign-in-alt mx-2 text-success"></i>   Log In</a>
      </li>

      <!-- modal pop-up for login-->
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
                  <? require_once 'inc/content/login-modal.inc.php' ?>
                  <form name="login_popup" id="login_popup" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <fieldset class="border border-secondary rounded px-2 pt-2 pb-4 mb-4 shadow bg-white">
                    <legend class="text-secondary">Enter your email & password:</legend>
                    <div class="px-4">
                      <label for="email_login">Email</label>
                      <br>
                      <input type="email" name="email_login" id="email_login">
                      <br><br>
                      <label for="pw_login">Password</label>
                      <br>
                      <input type="password" name="pw_login" id="pw_login">
                    </div>
                  </fieldset>
                  </form>
                    
                </div>
                <div class="modal-footer gradient-background">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
      </div>
      <!-- end modal -->

      <li class='d-inline'>
          <a href id="nav_logout" name="nav_logout" class='text-secondary'><i class="fas fa-sign-out-alt mx-2 text-info"></i>   Log Out</a>
      </li>
    </ul>
  </div>
</nav>
