<?php
session_start();
$servername ="websiteetq.000webhostapp.com";
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
