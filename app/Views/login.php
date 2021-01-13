<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
	<div style="max-width: 500px; margin: auto;">
		<a href="<?= BASE_URL ?>">Home</a>

		<br>

		<h1>Welcome Login </h1>

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
			<input type="email" name="email" placeholder="Email"> <br>
			<input type="password" name="password" placeholder="Password"> <br>

			<button type="submit" class="btn success">Login</button>
			<a href="<?= BASE_URL . "/signup" ?>" class="btn default">Signup</a>
		</form>
	</div>
</body>

</html>