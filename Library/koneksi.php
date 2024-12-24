<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pesona_bogor";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     echo 'error';
//     die('error');
// } else {
//     echo 'Koneksi Berhasil';
// }
