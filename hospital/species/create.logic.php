<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$id = $db->escape_string($_POST["id"]);

		$soort = $db->escape_string($_POST["soort"]);
		
		// Prepare query and execute
		$query = "insert into species (id, soort) values ('$id','$soort')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>