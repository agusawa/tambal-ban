<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php if ($success) : ?>
		<h4>Sukses</h4>
		<p><?= $success ?></p>
	<?php endif ?>

	<?php if ($error) : ?>
		<h4>Error</h4>
		<p><?= $error ?></p>
	<?php endif ?>

	<form action="" method="POST">
		<input type="text" name="name" placeholder="Name"> <br>
		<input type="text" name="address" placeholder="Address"> <br>
        <input type="text" name="description" placeholder="Description"> <br>
        <input type="number" name="whatsapp number" placeholder="Whatsapp Number"> <br>
		<button type="submit">Add</button>
	</form>
</body>

</html>