<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="gender">Gender:</label><br>
			<input type="radio" name="gender" value="male" checked> Male<br>
  			<input type="radio" name="gender" value="female"> Female<br>
		</div>

		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="species">Species:</label>
			<select name="speciesid" id="specie">
				<?php foreach($species as $specie): ?>
					<option value="<?= $specie['id']; ?>" <?php if ($specie['id'] == $specie['id']) { echo "selected"; } ?>><?= $specie['soort']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label for="client">Client:</label>
			<select name="clientid" id="client">
				<?php foreach($clients as $client): ?>
					<option value="<?= $client['id']; ?>" <?php if ($client['id'] == $client['id']) { echo "selected"; } ?>><?= $client['name']; ?></option>
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