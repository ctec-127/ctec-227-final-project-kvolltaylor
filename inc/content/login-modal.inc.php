        <!-- modal pop-up for login email and password -->
        <div class="modal fade" id="login_entry" tabindex="-1" role="dialog" aria-labelledby="login_entryTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header gradient-background">
                        <h5 class="modal-title" id="login_entryTitle">Log In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cancel">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- end div modal header -->
                    <!-- begin form -->
                    <form name="login_popup" id="login_popup" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <input type="hidden" name="action" value="login1">
                    <div id="modal-body" class="modal-body">
                        <fieldset class="border border-secondary rounded px-2 pt-2 pb-4 mb-4 shadow bg-white">
                        <legend class="text-secondary">Enter your email & password:</legend>
                        <div class="px-4">
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
                    </div> <!-- end div modal body -->
                    <div class="modal-footer gradient-background">
                        <button type="submit" id="submit" class="btn btn-secondary login" >Submit</button>
                        <span id="login_msg"></span>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> <!-- end div modal footer -->
                    </form> <!-- end form -->
                </div> <!-- end div modal content -->
            </div> <!-- end div modal dialogue -->
        </div> <!-- end div modal fade -->
    <!-- end modal -->