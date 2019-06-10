    <?php

    // check if form data sent post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $email = $_POST['email_login'];
        $password = hash('sha512',$_POST['pw_login']);

        // query
        $sql = "SELECT * FROM user WHERE email='$email' AND pw='$password'";
        
        //  echo $sql;
        $result = $db->query($sql);

        // logic to check if query worked
        if ($result->num_rows == 1) {

            $_SESSION['loggedin'] = 1;
            $_SESSION['email'] = $email;

            $row = $result->fetch_assoc();
            $_SESSION['first_name'] = $row['first'];

            header('location: frontpage.php');

        } else {
            echo '<p>Sorry, please try again</p>';
        }
        
    //  var_dump($result);
    }
    ?>

