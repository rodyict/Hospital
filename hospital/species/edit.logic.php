<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from species where id=$id";
			$result = $db->query($query);

			$species = $result->fetch_assoc();	
		endif;
		if ($species == NULL):
			// No client found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$soort = $db->escape_string($_POST["soort"]);


		
		// Prepare query and execute
		$query = "update species set soort='$soort' where id=$id";
		echo $query;
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>