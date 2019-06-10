<?php

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = strip_tags($_POST['pw']);
        $_SESSION['email'] = $email;
        $_SESSION['pw'] = $password;
    }

    echo '<pre>';
    echo $email;
    echo '</pre>';

?>