<?php

    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pw'] = $_POST['pw'];
    }

    echo $_SESSION['email'];
    echo $_SESSION['pw'];

?>