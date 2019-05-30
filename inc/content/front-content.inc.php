<div class="col-sm-12">

    
    <div class="pb-4 row">
        <div class="my-4 text-center col-12">
            <h1 class="display-2">Welcome to <span class="gfont">Jrnl</span></h1>
            <h2>A place to keep a daily bullet journal</h2>
            <h2>Track your anxiety and panic attacks</h2>
        </div>
    </div>

    <div class="row border border-success rounded mt-4">
        <div class="col m-4 btn btn-outline-success p-4 text-center">
            <a href='#' class='nude_link' data-toggle="modal" data-target="#login_entry">
                <p class='nude_link'><h3>Already have a Jrnl?</h3></p>
                <p class='nude_link'>Click here to sign in</p>
            </a>
        </div>
        <!-- modal pop-up for login-->
      <div class="modal fade" id="login_entry" tabindex="-1" role="dialog" aria-labelledby="login_entryTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header gradient-background">
                    <h5 class="modal-title" id="login_entryTitle">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cancel">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <button type="submit" class="submit" data-dismiss="modal" aria-label="Submit">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form>
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
        <div class="col m-4 btn btn-outline-primary p-4 text-center">
            <a href='register.php' class='nude_link'>
                <p class='nude_link'><h3>New to Jrnl?</h3></p>
                <p class='nude_link'>Click here to sign up for your own Jrnl</p>
            </a>
        </div>
    </div>

</div>