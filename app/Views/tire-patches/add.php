<!DOCTYPE html>
<html>

<head>
	<title>Add Tire Patch</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
	<div style="max-width: 500px; margin: auto;">
		<a href="<?= BASE_URL . "/account/edit" ?>">Ubah Profil</a> |
		<a href="<?= BASE_URL . "/account/change-password" ?>">Ubah Password</a> |
		<a href="<?= BASE_URL . "/logout" ?>">Log out</a>

		<h1>Add Tire Patch</h1>
		<?php if ($success) : ?>
			<div class="alert success">
				<?= $success ?>
			</div>
		<?php endif ?>

		<?php if ($error) : ?>
			<div class="alert danger">
				<?= $error ?>
			</div>
		<?php endif ?>

		<form action="" method="POST">
			<input type="text" name="name" placeholder="Name"> <br>
			<input type="text" name="address" placeholder="Address"> <br>
			<input type="text" name="description" placeholder="Description"> <br>
			<input type="number" name="whatsappNumber" placeholder="Whatsapp Number"> <br>
			<button type="submit">Add</button>
		</form>
	</div>
</body>

</html>