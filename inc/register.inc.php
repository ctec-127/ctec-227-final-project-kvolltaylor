<?php

require_once __DIR__ . "/../inc/db/mysqli_connect.inc.php";
require_once __DIR__ . "/../functions/functions.inc.php";
require __DIR__ . "/../inc/config/config.inc.php";


if ($_SERVER['REQUEST_METHOD']=="POST") {

    $error_bucket = [];

    // Check if all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket, "<p>A first name is required.</p>");
    } else {
        $first = $db->real_escape_string($_POST['first']);
    }

    if (empty($_POST['last'])) {
        array_push($error_bucket, "<p>A last name is required.</p>");
    } else {
        $last = $db->real_escape_string($_POST['last']);
    }

    if (empty($_POST['email'])) {
        array_push($error_bucket, "<p>An email address is required.</p>");
    } else {
        $email = $db->real_escape_string($_POST['email']);
    }

    if (empty($_POST['pw'])) {
        array_push($error_bucket, "<p>A password is required.</p>");
    } else {
        $password = hash('sha512',$_POST['pw']);
    }


    // if error bucket is empty then:
    if (count($error_bucket) == 0) {

        //sql insert new data into the user table
        $sql = "INSERT INTO $db_user_table (first_name,last_name,email,`pw`) 
                VALUES ('$first','$last','$email','$password')";

        $result = $db->query($sql);

        if($result){
            // feedback to let user know everything worked
            echo '<h1 class="text-success p-3">Yay! You created a Jrnl account!</h1>';

            // clear the fields for the next entry
            unset($first);
            unset($last);
            unset($email);
            unset($password);
        }
    
        } else{
        echo '<p class="font-warning">FILL OUT ALL FIELDS</p>';
    }

 
}
?>