<?php
	require_once "index.logic.php";
	include "../common/header.php";

	var_dump($species)
?>
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Soort</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>

	<?php
	foreach($species as $specie):
	?>


			<tr>
				<td><?=$specie['soort']?></td>	
				<td class="center"><a href="edit.php?id=<?=$specie['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$specie['id']?>">delete</a></td>
			</tr>


	<?php
	endforeach;
	?>


	
<?php
	include "../common/footer.php";
?>