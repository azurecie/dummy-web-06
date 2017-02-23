<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b908fe73ad502e";
$pass = "ff6c8be8";
$name = "fajarwebappdb2";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
