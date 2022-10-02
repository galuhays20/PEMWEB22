<?php
$host ="localhost";
$username = "root";
$password = "";
$database = "ptikuns21";
$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()){
	echo "koneksi database gagal :" . mysqli_connect_error();
}
?>