<?php
	
	$db = new mysqli('localhost','root','','hospital');

	//index.php?column=client&sort=asc
	if (isset($_GET['column']) && isset($_GET['sort'])) {
		if ($_GET['column'] == 'client') {
			$column = 'client.name';
			$clientsort = 'DESC';
		} elseif ($_GET['column'] == 'gender') {
			$gendersort = 'DESC';
		} else {
			$column = $_GET['column'];
		}
		$sort = $_GET['sort'];
		$sort = ' ORDER BY ' . $column . ' ' . $sort;
	} else {
		$sort = '';
	}

	

	$query = "SELECT patient.*, client.name AS client, client.phone, client.mail, species.soort FROM patient INNER JOIN client ON patient.clientid = client.id INNER JOIN species ON patient.speciesid=species.id $sort";

	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>