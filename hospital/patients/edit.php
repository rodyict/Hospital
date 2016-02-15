<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="species">Species:</label>
			<select name="speciesid" id="specie">
				<?php foreach($species1 as $specie): ?>
					<option value="<?= $specie['id']; ?>" <?php if ($specie['id'] == $patient['speciesid']) { echo "selected"; } ?>><?= $specie['soort']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label for="status">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="client">Client:</label>
			<select name="clientid" id="client">
				<?php foreach($clients as $client): ?>
					<option value="<?= $client['id']; ?>" <?php if ($client['id'] == $patient['clientid']) { echo "selected"; } ?>><?= $client['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>