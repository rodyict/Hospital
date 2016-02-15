<?php
	require_once "index.logic.php";
	include "../common/header.php";

	var_dump($clients)
?>

	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name Client</th>
				<th>Phone</th>
				<th>Mail</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>

	<?php
	foreach($clients as $client):
	?>


			<tr>
				<td><?=$client['name']?></td>
				<td><?=$client['phone']?></td>	
				<td><?=$client['mail']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
			</tr>


	<?php
	endforeach;
	?>




<?php
	include "../common/footer.php";
?>