<?php 

$databaseHost = 'localhost';
$databaseName = 'pmb';
$databaseUsername= 'root';
$databasePassword= '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($conn -> connect_errno) {
	echo die("Gagal menghubungkan ke database".$conn->connect_error);
}
 ?> 