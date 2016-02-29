<?php
	require_once "index.logic.php";
	include "../common/header.php";

	
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="index.php?column=name&sort=<?= $sort ?>">Name</a></th>
				<th><a href="index.php?column=soort&sort=<?= $sort ?>">Species</a></th>
				<th><a href="index.php?column=status&sort=<?= $sort ?>">Status</a></th>
				<th><a href="index.php?column=client&sort=<?= $sort ?>">Client</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['soort']?></td>	
				<td><?=$patient['status']?></td>
				<td><?=$patient['client']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>