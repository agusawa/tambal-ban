<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Welcome Login </h1>

	<?php if ($success) : ?>
		<h4>Sukses</h4>
		<p><?=$success?></p>
	<?php endif ?>

	<?php if ($error) : ?>
		<h4>Error</h4>
		<p><?=$error?></p>
	<?php endif ?>

	<form action="" method = "POST">
		<input type = "email" name = "email" placeholder="Email"> <br>
		<input type = "password" name = "password" placeholder="Password"> <br>
		<button type = "submit">Login</button>
	</form>
</body>
</html>