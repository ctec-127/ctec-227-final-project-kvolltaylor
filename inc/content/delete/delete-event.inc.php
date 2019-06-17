<?php

    session_start();

    require_once '../../db/mysqli_connect.inc.php';
    require_once '../../config/config.inc.php';

    if (isset($_GET['id'])) {

        echo "GET FIRED OFF";
        $id = $_GET['id'];

        $sql_delete_event = "DELETE FROM `event` WHERE event_id='$id'";
        $sql_delete_location_tag = "DELETE FROM `event_location_tag` WHERE entry_id='$id'";

        $result_delete_event = $db->query($sql_delete_event);
        $result_delete_location_tag = $db->query($sql_delete_location_tag);

        if($result_delete_event){
            header('location: /ctec-227-final-project-kvolltaylor/read-events.php?message=You%20 successfully%20deleted%20that%20event%20entry.');
        } else {
            echo 'Uh oh, something has gone awry!';
        }
    };

?>