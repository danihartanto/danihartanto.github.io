<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'sispakar';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>