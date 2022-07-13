<?php 
$servername ="localhost";
$username = "username";
$password = "password";
$ulang_password = "ulang_password";
$dbname = "pemrogramanweb";

// buat koneksi
$conn = new mysql($servername,$username,$password,$dbname);

// cek koneksi
if($conn->connect_error){
	die("Koneksi gagal: " . $conn->connect_error);
}
else
echo "Koneksi berhasil terhubung";
 ?>
