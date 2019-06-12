<?php 

    session_start();
    session_destroy();
    unset($_POST['email']);
    unset($_POST['pw']);

    echo json_encode(['status'=>'success']);
?>