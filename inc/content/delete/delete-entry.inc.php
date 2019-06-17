<?php

    session_start();

    require_once '../../db/mysqli_connect.inc.php';
    require_once '../../config/config.inc.php';

    if (isset($_GET['id'])) {

        echo "GET FIRED OFF";
        $id = $_GET['id'];

        $sql_delete_entry = "DELETE FROM `entry` WHERE entry_id='$id'";
        $sql_delete_entry_tag = "DELETE FROM `entry_tag` WHERE entry_id='$id'";

        $result_delete_entry = $db->query($sql_delete_entry);
        $result_delete_entry_tag = $db->query($sql_delete_entry_tag);

        if($result_delete_entry){
            header('location: /ctec-227-final-project-kvolltaylor/read-entries.php?message=You%20 successfully%20deleted%20that%20entry.');
        } else {
            echo 'Uh oh, something has gone awry!';
        }
    };

?>