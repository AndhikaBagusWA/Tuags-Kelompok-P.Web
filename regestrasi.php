<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi</title>
</head>
<style type="text/css">
	label {
		display: block;
	}
</style>
<body>
	<h1>Form Regestrasi</h1>
	<form action="prosesRegis.php" method="post">
		<label for="username">Username: </label>
		<input type="tezt" name="username" id="username">

		<label for="username">Password: </label>
		<input type="password" name="password" id="password">

		<label for="username">Ulang Password: </label>
		<input type="password" name="ulang_password" id="password"><br>

		<button type="submit" name="register">Register</button>
		<button type="reset">Reset</button>
		<?php include 'notif.php'; ?>
	</form>
</body>
</html>

