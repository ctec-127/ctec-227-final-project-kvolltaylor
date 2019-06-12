<?php
    session_start();

    if (isset($_POST['slider'])) {
        $_SESSION['slider'] = $_POST['slider'];
    }

    echo $_SESSION['slider'];

?>