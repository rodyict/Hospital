<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from patient where id=$id";
			$query2 = "select * from client";
			$query3 = "select * from species";


			$result = $db->query($query);
			$result2 = $db->query($query2);
			$result3 = $db->query($query3);
		

			$patient = $result->fetch_assoc();
			$clients = $result2->fetch_all(MYSQLI_ASSOC);	
			$species1 = $result3->fetch_all(MYSQLI_ASSOC);

		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$clientid = $db->escape_string($_POST["clientid"]);
		$speciesid = $db->escape_string($_POST["speciesid"]);
		
		// Prepare query and execute
		$query = "update patient set name='$name', status='$status', clientid=$clientid, speciesid = $speciesid where id=$id";
		echo $query;
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>