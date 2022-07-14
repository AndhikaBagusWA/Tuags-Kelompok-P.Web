<?php 
	include('config.php');
	//var_dump($_POST);

// inisialisasi variabel
$username = $_POST['username'];
$password = $_POST['password'];
$ulang_password = $_POST['ulang_password'];

	// cek username apakah sudah terdaftar
	$user = $conn->query("SELECT * FROM `users` WHERE username = '$username'");
	
	if ($user->num_rows > 0) { 
		$_SESSION['gagal'] = "Username telah terdatar, silahkan gunakan username lain";
		die();
	}
	// cek password
	if ($password != $ulang_password) { 
		$_SESSION['gagal'] = "Password yang anda masukan tidak sama dengan ulang password";
		die();
	}
	// save 
	$sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";

	if ($conn->query($sql) === TRUE) {
    $_SESSION['notif'] = "Register berhasil, silahkan login!";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
 ?>
