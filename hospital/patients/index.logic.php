<?php
	
	$db = new mysqli('localhost','root','','hospital');

	//index.php?column=client&sort=asc
	if (isset($_GET['column']) && isset($_GET['sort'])) {
		$order = " ORDER BY " . $_GET['column'] . " " . $_GET['sort'];
		$sort = $_GET['sort'] == "asc" ? "desc":"asc";
	} else {
		$sort = 'asc';
		$order = '';
	}

	

	$query = "SELECT patient.*, client.name AS client, client.phone, client.mail, species.soort FROM patient INNER JOIN client ON patient.clientid = client.id INNER JOIN species ON patient.speciesid=species.id $order";

	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>