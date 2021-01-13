<!DOCTYPE html>
<html>

<head>
	<title>Edit Tire Patch</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
	<div style="max-width: 500px; margin: auto;">
		<a href="<?= BASE_URL . "/account/edit" ?>">Ubah Profil</a> |
		<a href="<?= BASE_URL . "/account/change-password" ?>">Ubah Password</a> |
		<a href="<?= BASE_URL . "/logout" ?>">Log out</a>

		<h1>Edit Tire Patch</h1>

		<form action="" method="POST">
			<input type="text" name="name" placeholder="Name" value="<?= $tirePatch->getName() ?>"> <br>
			<input type="text" name="address" placeholder="Address" value="<?= $tirePatch->getAddress() ?>"> <br>
			<input type="text" name="description" placeholder="Description" value="<?= $tirePatch->getDescription() ?>"> <br>
			<input type="text" name="whatsappNumber" placeholder="Whatsapp Number" value="<?= $tirePatch->getWhatsappNumber() ?>"> <br>
			<button type="submit" class="btn success">Edit</button>
			<a href="<?= BASE_URL . "/tire-patches" ?>" class="btn default">Kembali</a>
		</form>
	</div>
</body>

</html>