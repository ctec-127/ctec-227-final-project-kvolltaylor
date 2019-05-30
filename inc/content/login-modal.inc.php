<?php session_start(); ?>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
     # Create a new connection to the database
     $db = new mysqli('localhost','root','','journal');
     # If there was an error connecting to the database
     if ($db->connect_error) {
         $error = $db->connect_error;
         echo $error;
     }
     # Set the character encoding of the database connection to UTF-8
     $db->set_charset('utf8');
     $email = $_POST['email'];
     $password = hash('sha512',$_POST['pw']);
     $sql = "SELECT * FROM user WHERE email='$email' AND pw='$password'";
    //  echo $sql;
     $result = $db->query($sql);
     if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = 1;
        $_SESSION['email'] = $email;
        $row = $result->fetch_assoc();
        $_SESSION['first_name'] = $row['first_name'];
        header('location: frontpage.php');
        
     } else {
         echo '<p>Please try again or go away</p>';
     }
     
    //  var_dump($result);
    }
    ?>
<!-- 
     <form action="login-modal.inc.php" method="POST">
         <label for="email">Email</label>
         <br><br>
         <input type="email" name="email" id="email" required> 
         <br><br>
         <label for="password">Password</label>
         <span id="showPassword" onclick="showPassword();">Show Password</span>
         <br><br>
         <input type="password" name="password" id="password" required>
         <br><br>
         <input type="submit" value="Login">
     </form>

    <script>
        function showPassword() {
            let passwordField = document.getElementById('password');
            let showPassword = document.getElementById('showPassword');
            
            if (showPassword.innerHTML === 'Show Password') {
                showPassword.innerHTML = 'Hide Password';
                passwordField.type = 'text';
            } else if (showPassword.innerHTML === 'Hide Password') {
                passwordField.type = 'password';
                showPassword.innerHTML = 'Show Password';
            }
        }
    </script> -->
