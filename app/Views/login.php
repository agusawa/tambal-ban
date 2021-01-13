<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
	<div style="max-width: 500px; margin: auto;">
		<h1>Welcome Login </h1>

		<?php if ($success) : ?>
			<h4>Sukses</h4>
			<p><?= $success ?></p>
		<?php endif ?>

		<?php if ($error) : ?>
			<h4>Error</h4>
			<p><?= $error ?></p>
		<?php endif ?>

		<form action="" method="POST">
			<input type="email" name="email" placeholder="Email"> <br>
			<input type="password" name="password" placeholder="Password"> <br>

			<button type="submit" class="btn success">Login</button>
			<a href="<?= BASE_URL . "/signup" ?>" class="btn default">Signup</a>
		</form>
	</div>
</body>

</html>