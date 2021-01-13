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
		<input type="email" name="email" placeholder="Email"> <br>
        <button type="submit">edit</button>
	</form>
</body>

</html>