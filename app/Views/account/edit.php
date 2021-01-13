<!DOCTYPE html>
<html>

<head>
	<title>Change Profile Information</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
	<div style="max-width: 700px; margin: auto;">
		<a href="<?= BASE_URL . "/account/edit" ?>">Ubah Profil</a> |
		<a href="<?= BASE_URL . "/account/change-password" ?>">Ubah Password</a> |
		<a href="<?= BASE_URL . "/logout" ?>">Log out</a>

		<h1>Change Profile Information</h1>

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
			<input type="text" name="name" placeholder="Name" value="<?= $user->getName() ?>"> <br>
			<input type="email" name="email" placeholder="Email" value="<?= $user->getEmail() ?>"> <br>
			<button type="submit" class="btn success">edit</button>
			<a href="<?= BASE_URL . "/tire-patches" ?>" class="btn default">Back</a>
		</form>
	</div>
</body>

</html>