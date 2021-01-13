<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
	<div style="max-width: 500px; margin: auto;">
		<a href="<?= BASE_URL ?>">Home</a>

		<br>

		<h1>Sign Up Page</h1>

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
			<input type="text" name="name" placeholder="name"> <br>
			<input type="email" name="email" placeholder="email"> <br>
			<input type="password" name="password" placeholder="password"> <br>
			<button type="submit" class="btn success">Sign Up</button>
			<a href="<?= BASE_URL . "/login" ?>" class="btn default">Login</a>
		</form>
	</div>
</body>

</html>