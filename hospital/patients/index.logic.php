<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.*, client.name AS client, client.phone, client.mail, species.soort FROM patient INNER JOIN client ON patient.clientid = client.id INNER JOIN species ON patient.speciesid = species.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>