<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD']=="POST") {

        $free_write = $db->real_escape_string($_POST['free_write']);

        // $mood_slider = $db->real_escape_string($_POST['slider']);

        $tags = $db->real_escape_string($_POST['tags']);

        $email = $_SESSION['email'];

        $id_sql = "SELECT user_id FROM user WHERE email='$email'";
        $id_result = $db->query($id_sql);
        while ($row = $id_result->fetch_assoc()) {
            echo "<h1>{$row['user_id']}</h1>";
        };

        echo $free_write;
        echo "<br>";
        echo $tags;
        echo "<br>";
        echo $id_result;


        //sql insert new data into the user table
        $sql = "INSERT INTO $db_entry_table (`text`,tags,`date`,user_id) 
                        VALUES ('$free_write','$tags',CURDATE(),$id)";

        $result = $db->query($sql);

        if ($result) {
            // feedback to let user know everything worked
            echo '<h1 class="text-success p-3">THIS GODDAMN WORKED</h1>';

            // clear the fields for the next entry
            // unset($free_write);
            // unset($mood_slider);
            // unset($tags);
            // unset($email);
        }

    }

?>