<?php

    if ($_SERVER['REQUEST_METHOD']=="POST") {

        // ENTRY

        // entry variables
        $free_write = $db->real_escape_string($_POST['free_write']);
        $mood_slider = $db->real_escape_string($_POST['mood']);
        $tags_string = $_POST['tags'];
        $tags_array = explode(",",$tags_string);
        $apyn = $db->real_escape_string($_POST['apyn']);
        $email = $_SESSION['email'];
        $user_id = $_SESSION['user_id'];


        // sql to insert new data into the entry table
        $sql = "INSERT INTO $db_entry_table (`text`,`mood`,`apyn`,`date`,`user_id`) 
                VALUES ('$free_write','$mood_slider','$apyn',CURDATE(),'$user_id')";
        $result = $db->query($sql);

        // sql to insert tags into tags table
        // sql to insert tag id and entry id into tag_entry table
        if (!empty($tags_string)) {
            for ($i=0; $i < count($tags_array); $i++) {
                $tag = $db->real_escape_string($tags_array[$i]);
    
                $sql_tags = "INSERT INTO $db_tags_table (`tag`) VALUES ('$tag')";
                $result = $db->query($sql_tags);
    
                $sql_entry_tags = "INSERT INTO $db_entry_tag_table (`entry_id`,`tag_id`) SELECT MAX(entry_id),id FROM $db_entry_table,$db_tags_table WHERE tag='$tag'";
                $result = $db->query($sql_entry_tags);
            }
    
        }

        // EVENT

        if ($apyn == 'y'){

            // event variables
            $location_tags_string = $_POST['location_tags'];
            $location_tags_array = explode(",",$location_tags_string);
            $anxiety_level = $db->real_escape_string($_POST['anxiety_level']);
            $event_time = $db->real_escape_string($_POST['event_time']);
            $notes = $db->real_escape_string($_POST['notes']);


            // sql to insert new data into the event table
            $sql_2 = "INSERT INTO $db_event_table (`anxiety_level`,`event_time`,`notes`,`date`,`user_id`) 
                VALUES ('$anxiety_level','$event_time','$notes',CURDATE(),'$user_id')";
            $result = $db->query($sql_2);

             // sql to insert tags into tags table
            // sql to insert tag id and entry id into tag_entry table
            if (!empty($location_tags_string)) {
                for ($i=0; $i < count($location_tags_array); $i++) {
                    $location_tag = $db->real_escape_string($location_tags_array[$i]);
        
                    $sql_location_tags = "INSERT INTO $db_location_tag_table (`location_tag`) VALUES ('$location_tag')";
                    $result = $db->query($sql_location_tags);

        
                    $sql_event_tags = "INSERT INTO $db_event_location_tag_table (`event_id`,`event_location_tag_id`) SELECT MAX(event_id),location_tag_id FROM $db_event_table,$db_location_tag_table WHERE location_tag='$location_tag'";
                    $result = $db->query($sql_event_tags);
                }
        
            }


            // end insert location tags
        }
       
    }

?>