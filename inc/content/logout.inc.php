<?php 


    unset($_POST['email']);
    unset($_POST['pw']);

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        session_start();

        $_SESSION = array();

        session_destroy();

        echo json_encode(['status'=>'success']);
        
    }
?>