<?php 

session_start();
ob_start();

$host = 'cozadb.mysql.database.azure.com';
$username = 'czdb';
$password = 'sterlingGmail@2020'; // Use actual password
$database = 'cozastore';

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $database, NULL , NULL, MYSQLI_CLIENT_SSL);


 ?>
