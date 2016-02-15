<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$gender = $db->escape_string($_POST["gender"]);
		$status = $db->escape_string($_POST["status"]);
		$clientid = $db->escape_string($_POST["clientid"]);
		$speciesid = $db->escape_string($_POST["speciesid"]);

		// Prepare query and execute
		$query = "insert into patient (name, gender, status, clientid,speciesid) values ('$name', '$gender', '$status', $clientid, $speciesid)";
		echo $query;
		$result = $db->query($query);
	
	    // Tell the browser to go back to the index page.
	    header("Location: ./");
    	exit();
    elseif ($_SERVER["REQUEST_METHOD"] == "GET"):
    		$db = new mysqli('localhost','root','','hospital');
			
			$query2 = "select * from client";
			$query3 = "select * from species";

			$result2 = $db->query($query2);
			$result3 = $db->query($query3);

			$clients = $result2->fetch_all(MYSQLI_ASSOC);	
			$species = $result3->fetch_all(MYSQLI_ASSOC);
	endif;

?>