<!DOCTYPE html>
<html>

<head>
	<title>Change Password</title>
</head>

<body>
	<h1>Change Password</h1>

    
	<?php if ($success) : ?>
		<h4>Sukses</h4>
		<p><?= $success ?></p>
	<?php endif ?>

	<?php if ($error) : ?>
		<h4>Error</h4>
		<p><?= $error ?></p>
	<?php endif ?>

	<form action="" method="POST">
		<input type="oldPassword" name="oldPassword" placeholder="Old Password"> <br>
		<input type="newPassword" name="newPassword" placeholder="New Password"> <br>
        <input type="passwordConfirmation" name="passwordConfirmation" placeholder="Password Confirmation"> <br>
		<button type="submit">Ok</button>
	</form>
</body>

</html>