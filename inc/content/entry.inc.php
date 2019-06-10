<?php

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $free_write = $db->real_escape_string($_POST['free_write']);

        $mood_slider = $db->real_escape_string($_POST['slider']);

        $tags = $db->real_escape_string($_POST['tags']);
        
        // $email = $db->real_escape_string($_SESSION['email']);

        $id = "SELECT user_id FROM users WHERE email=".$_SESSION['email'];


        //sql insert new data into the user table
        $sql = "INSERT INTO $db_entry_table (text,mood,tags,date,user_id) 
                        VALUES ('$free_write','$mood_slider','$tags',CURDATE(),$id)";

        $result = $db->query($sql);

        if ($result) {
            // feedback to let user know everything worked
            echo '<h1 class="text-success p-3">Yay! You created a Jrnl account!</h1>';

            // clear the fields for the next entry
            unset($free_write);
            unset($mood_slider);
            unset($tags);
            unset($email);
        }

    }

?>