<?php
session_start();
$servername ="files.000webhost.com";
$username = "root";
$password = "";
$dbname = "pemrogramanweb";

// buat koneksi
$conn = new mysqli($servername,$username,$password,$dbname);

// cek koneksi
if($conn->connect_error){
	die("Koneksi gagal: " . $conn->connect_error);
}
else
 ?>
