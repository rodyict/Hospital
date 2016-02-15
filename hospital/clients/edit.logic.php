<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from client where id=$id";
			$result = $db->query($query);
		
			$client = $result->fetch_assoc();		
		endif;
		if ($client == NULL):
			// No client found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$phone = $db->escape_string($_POST["phone"]);
		$mail = $db->escape_string($_POST["mail"]);
		
		// Prepare query and execute
		$query = "update client set name='$name', phone='$phone', mail='$mail' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>