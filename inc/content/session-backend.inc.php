<?php

    session_start();
    // session_regenerate_id(true); 

    if (isset($_POST['email'])) {

        require_once '../db/mysqli_connect.inc.php';
        require_once '../config/config.inc.php';
        
        $login_email = $_POST['email'];
        $login_pw = hash('sha512',$_POST['pw']);
        $_SESSION['email'] = $_POST['email'];

        $sql = "SELECT first_name,user_id 
                FROM $db_user_table 
                WHERE email='$login_email' AND pw='$login_pw'";
        $result = $db->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo $row['first_name'];
                $_SESSION['user_id'] = $row['user_id'];
            };
        }; 
        
    }


?>