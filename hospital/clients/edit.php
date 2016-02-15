<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>">
		</div>
		<div>
			<label for="name">Telefoon:</label>
			<input type="text" id="phone" name="phone" value="<?=$client['phone']?>">
		</div>
		<div>
			<label for="mail">E-mail:</label>
			<textarea id="mail" name="mail"><?=$client['mail']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>