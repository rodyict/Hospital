<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$phone = $db->escape_string($_POST["phone"]);
		$mail = $db->escape_string($_POST["mail"]);
		
		// Prepare query and execute
		$query = "insert into client (name, phone, mail) values ('$name','$phone','$mail')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>