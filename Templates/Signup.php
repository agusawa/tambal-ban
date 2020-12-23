<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Sign Up Page</hi>

	<?php if ($success) : ?>
		<h4>Success</h4>
		<p><?=$success?></p>
	<?php endif ?>

	<?php if ($error) : ?>
		<h4>Error</h4>
		<p><?=$error?></p>
	<?php endif ?>

	<form action="" method="POST">
		<input type="text" name="Name" placeholder="Name"> <br>
		<input type="email" name="Email" placeholder="Email"> <br>
		<input type="password" name="Password" placeholder="Password"> <br>
		<button type="submit">Sign Up</button>
	</form>
</body>
</html>