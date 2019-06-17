<?php

function db_query_tags($db,$sql){
    $result = $db->query($sql);
	$columns = $result->fetch_fields();
	while ($row = $result->fetch_assoc()){
		foreach($row as $value) { 
			echo '<span class="tag bg-dark text-white p-1 m-1 d-inline-block">'.$value.' </span>';
		} //end foreach
	} // end while
} // end function

?>