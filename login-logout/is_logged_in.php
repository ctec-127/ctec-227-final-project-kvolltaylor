<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['email'] = $_POST['email_login'];
        $_SESSION['pw'] = $_POST['pw_login'];
    }
    
    if(isset($_SESSION['email'])){
        echo json_encode(["status"=>'yes']);
    } else {
        echo json_encode(["status"=>'no']);
    }
?>