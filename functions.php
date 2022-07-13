<?php 
$servername ="localhost";
$username = "username";
$password = "password";
// buat koneksi
$conn = new mysql($servername,$username,$password);

// cek koneksi
if($conn->connect_error){
	die("Koneksi gagal: ". $conn->connect_error);
}
echo "Koneksi berhasil terhubung";

	function registrasi($data){
		global $conn
	}
 ?>